<?php

namespace App\Tests\Unit\Service;

use App\DTO\ReaderOutputDTO;
use App\Entity\Reader;
use App\Mapper\ReaderMapper;
use App\Repository\ReaderRepository;
use App\Service\ReaderService;
use PHPUnit\Framework\TestCase;

class ReaderServiceTest extends TestCase
{
    public function testGetByIdReturnsSuccessMessageWhenReaderExists(): void
    {
        // 1. On configure le faux Reader avec ses vrais getters
        $readerMock = $this->createMock(Reader::class);
        $readerMock->method('getId')->willReturn(1);
        $readerMock->method('getUsername')->willReturn('John');
        $readerMock->method('getMail')->willReturn('john@test.com');
        $readerMock->method('getDateInscription')->willReturn(new \DateTime());
        $readerMock->method('getConnectionSerie')->willReturn(5);
        $readerMock->method('getDateLastConnection')->willReturn(new \DateTime());
        $readerMock->method('getDateLastRead')->willReturn(new \DateTime());
        $readerMock->method('isPremium')->willReturn(true);
        $readerMock->method('getTotalPoint')->willReturn(100);
        $readerMock->method('isConsentementAnalytics')->willReturn(false);

        // 2. On mocke le Repository
        $readerRepositoryMock = $this->createMock(ReaderRepository::class);
        $readerRepositoryMock->expects($this->once())
            ->method('findOneById')
            ->with(1)
            ->willReturn($readerMock);

        // 3. On utilise une vraie instance de ton Mapper
        $readerMapper = new ReaderMapper();

        // 4. On passe les deux au Service
        $readerService = new ReaderService($readerRepositoryMock, $readerMapper);

        // 5. Exécution et assertion
        $result = $readerService->getById(1);

        $this->assertInstanceOf(ReaderOutputDTO::class, $result);
        $this->assertSame('John', $result->username);
    }

    public function testGetByIdThrowsExceptionWhenReaderDoesNotExist(): void
    {
        $readerRepositoryMock = $this->createMock(ReaderRepository::class);
        $readerRepositoryMock->expects($this->once())
            ->method('findOneById')
            ->with(999)
            ->willReturn(null);

        // On instancie le mapper même s'il ne sera pas appelé à cause de l'exception
        $readerService = new ReaderService($readerRepositoryMock, new ReaderMapper());

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('No reader found for id 999');

        $readerService->getById(999);
    }
}