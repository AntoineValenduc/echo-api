<?php

use OpenApi\Attributes as OA;

#[OA\Schema]
class HealthResponse
{
    #[OA\Property(example: 'UP')]
    public string $status;

    #[OA\Property(example: 'dev')]
    public string $environment;

    #[OA\Property(example: '0.0.1')]
    public string $version;

    #[OA\Property(format: 'date-time')]
    public string $timestamp;
}
