<?php

namespace App\DTO;

use DateTime;
use Symfony\Component\Uid\Uuid;

final class ReaderOutputDTO
{
    public function __construct(
        public readonly Uuid $id,
        public readonly string $username,
        public readonly string $email,
        public readonly DateTime $date_inscription,
        public readonly int $connection_serie,
        public readonly DateTime $date_last_connection,
        public readonly DateTime $date_last_read,
        public readonly bool $is_premium,
        public readonly int $total_point,
        public readonly bool $consentement_analytics,
    ) {}
}
