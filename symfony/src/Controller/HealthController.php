<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Prometheus\CollectorRegistry;

final readonly class HealthController
{
    public function __construct(
        private Connection $connection,
        private HttpClientInterface $httpClient,
        private CollectorRegistry $registry,
    ) {}

    #[Route('/health', name: 'app_health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        $checks = [];

        // PostgreSQL
        try {
            $this->connection->executeQuery('SELECT 1');
            $checks['database'] = 'UP';
        } catch (\Throwable) {
            $checks['database'] = 'DOWN';
        }

        // Redis
        try {
            $redis = RedisAdapter::createConnection(
                $_ENV['REDIS_URL']
            );

            $redis->ping();

            $checks['redis'] = 'UP';
        } catch (\Throwable) {
            $checks['redis'] = 'DOWN';
        }

        // Keycloak
        try {
            $response = $this->httpClient->request(
                'GET',
                sprintf(
                    '%s/health/ready',
                    rtrim($_ENV['KEYCLOAK_URL'], '/')
                )
            );

            $checks['keycloak'] = $response->getStatusCode() === 200
                ? 'UP'
                : 'DOWN';
        } catch (\Throwable) {
            $checks['keycloak'] = 'DOWN';
        }

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

        $start = microtime(true);

        /* traitement */

        $histogram->observe(microtime(true) - $start);

        $healthy = !in_array('DOWN', $checks, true);

        return new JsonResponse(
            [
                'status' => $healthy ? 'UP' : 'DOWN',
                'environment' => $_ENV['APP_ENV'] ?? 'unknown',
                'version' => $_ENV['APP_VERSION'] ?? 'dev',
                'timestamp' => (new \DateTimeImmutable())->format(DATE_ATOM),
                'checks' => $checks,
            ],
            $healthy ? 200 : 503
        );
    }

    #[Route('/health/live', name: 'app_health_live', methods: ['GET'])]
    public function live(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'UP',
            'timestamp' => (new \DateTimeImmutable())->format(DATE_ATOM),
        ]);
    }

    #[Route('/health/ready', name: 'app_health_ready', methods: ['GET'])]
    public function ready(): JsonResponse
    {
        $ready = true;

        try {
            $this->connection->executeQuery('SELECT 1');
        } catch (\Throwable) {
            $ready = false;
        }

        try {
            $redis = RedisAdapter::createConnection(
                $_ENV['REDIS_URL']
            );

            $redis->ping();
        } catch (\Throwable) {
            $ready = false;
        }

        return new JsonResponse(
            [
                'status' => $ready ? 'READY' : 'NOT_READY',
            ],
            $ready ? 200 : 503
        );
    }
}