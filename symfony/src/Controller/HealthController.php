<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Prometheus\CollectorRegistry;
use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use OpenApi\Attributes as OA;

#[Route('', name: 'app_health', methods: ['GET'])]
#[OA\Get(
    path: '/health',
    summary: 'Check global health of the application',
    tags: ['Health']
)]
#[OA\Response(
    response: 200,
    description: 'Application is healthy'
)]
#[OA\Response(
    response: 503,
    description: 'One or more dependencies are unavailable'
)]
#[OA\JsonContent(
    properties: [
        new OA\Property(
            property: 'status',
            type: 'string',
            example: 'UP'
        ),
        new OA\Property(
            property: 'environment',
            type: 'string',
            example: 'dev'
        ),
        new OA\Property(
            property: 'version',
            type: 'string',
            example: '0.0.1'
        ),
        new OA\Property(
            property: 'timestamp',
            type: 'string',
            format: 'date-time'
        ),
        new OA\Property(
            property: 'checks',
            type: 'object',
            example: [
                'database' => 'UP',
                'redis' => 'UP',
                'keycloak' => 'UP',
            ]
        ),
    ]
)]

#[Route('/health')]
final readonly class HealthController
{
    private const STATUS_UP = 'UP';
    private const STATUS_DOWN = 'DOWN';

    public function __construct(
        private Connection $connection,
        private HttpClientInterface $httpClient,
        private CollectorRegistry $registry,
    ) {
    }

    #[Route('', name: 'app_health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        $startTime = microtime(true);

        $checks = [
            'database' => $this->checkDatabase()
                ? self::STATUS_UP
                : self::STATUS_DOWN,
            'redis' => $this->checkRedis()
                ? self::STATUS_UP
                : self::STATUS_DOWN,
            'keycloak' => $this->checkKeycloak()
                ? self::STATUS_UP
                : self::STATUS_DOWN,
        ];

        $this->recordMetrics($startTime);

        $healthy = !in_array(
            self::STATUS_DOWN,
            $checks,
            true
        );

        return new JsonResponse(
            [
                'status' => $healthy
                    ? self::STATUS_UP
                    : self::STATUS_DOWN,
                'environment' => $_ENV['APP_ENV'] ?? 'unknown',
                'version' => $_ENV['APP_VERSION'] ?? 'dev',
                'timestamp' => (new \DateTimeImmutable())->format(DATE_ATOM),
                'checks' => $checks,
            ],
            $healthy ? 200 : 503
        );
    }

    #[Route('/live', name: 'app_health_live', methods: ['GET'])]
    #[OA\Get(
        path: '/health/live',
        summary: 'Liveness Probe',
        description: 'Vérifie uniquement que l\'application Symfony répond.',
        tags: ['Health']
    )]
    #[OA\Response(
        response: 200,
        description: 'Application vivante'
    )]
    public function live(): JsonResponse
    {
        return new JsonResponse([
            'status' => self::STATUS_UP,
            'timestamp' => (new \DateTimeImmutable())->format(DATE_ATOM),
        ]);
    }

    #[Route('/ready', name: 'app_health_ready', methods: ['GET'])]
    #[OA\Get(
        path: '/health/ready',
        summary: 'Readiness Probe',
        description: 'Vérifie que les dépendances critiques sont disponibles.',
        tags: ['Health']
    )]
    #[OA\Response(
        response: 200,
        description: 'Application prête'
    )]
    #[OA\Response(
        response: 503,
        description: 'Une dépendance critique est indisponible'
    )]
    public function ready(): JsonResponse
    {
        $ready =
            $this->checkDatabase()
            && $this->checkRedis()
            && $this->checkKeycloak();

        return new JsonResponse(
            [
                'status' => $ready
                    ? 'READY'
                    : 'NOT_READY',
                'timestamp' => (new \DateTimeImmutable())->format(DATE_ATOM),
            ],
            $ready ? 200 : 503
        );
    }

    private function checkDatabase(): bool
    {
        try {
            $this->connection->executeQuery('SELECT 1');

            return true;
        } catch (\Throwable) {
            return false;
        }
    }

    private function checkRedis(): bool
    {
        try {
            $redis = RedisAdapter::createConnection(
                $_ENV['REDIS_URL']
            );

            $redis->ping();

            return true;
        } catch (\Throwable) {
            return false;
        }
    }

    private function checkKeycloak(): bool
    {
        try {
            $response = $this->httpClient->request(
                'GET',
                sprintf(
                    '%s/health/ready',
                    rtrim($_ENV['KEYCLOAK_URL'], '/')
                ),
                [
                    'timeout' => 3,
                ]
            );

            return $response->getStatusCode() === 200;
        } catch (\Throwable) {
            return false;
        }
    }

    private function recordMetrics(float $startTime): void
    {
        try {
            $counter = $this->registry->getOrRegisterCounter(
                'echo_api',
                'health_requests_total',
                'Number of health requests'
            );

            $counter->inc();

            $histogram = $this->registry->getOrRegisterHistogram(
                'echo_api',
                'health_request_duration_seconds',
                'Health endpoint duration'
            );

            $histogram->observe(
                microtime(true) - $startTime
            );
        } catch (\Throwable $e) {
            // logger éventuellement
        }
    }
}
