<?php

namespace App\Service;

use App\Repository\ReaderRepository;
use App\DTO\ReaderOutputDTO;
use App\Mapper\ReaderMapper;
use Symfony\Component\Uid\Uuid;

final class ReaderService
{
    public function __construct(
        private readonly ReaderRepository $readerRepository,
        private readonly ReaderMapper $readerMapper
    ) {
    }

    public function getById(Uuid $id): ReaderOutputDTO
    {
        $reader = $this->readerRepository->findOneById($id);

        if (!$reader) {
            throw new \InvalidArgumentException('No reader found for id '.$id);
        }

        return $this->readerMapper->toOutputDTO($reader);
    }
}
