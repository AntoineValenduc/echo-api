<?php

namespace App\Service;

use App\Repository\ReaderRepository;
use App\DTO\ReaderOutputDTO;
use App\Mapper\ReaderMapper;

final class ReaderService
{
    public function __construct(
        private readonly ReaderRepository $readerRepository,
        private readonly ReaderMapper $readerMapper
    ) {}

    public function getById(int $id): ReaderOutputDTO
    {
        $reader = $this->readerRepository->findOneById($id);
        
        if (!$reader) {
            throw new \InvalidArgumentException('No reader found for id '.$id);
        }

        return $this->readerMapper->toOutputDTO($reader);
    }
}