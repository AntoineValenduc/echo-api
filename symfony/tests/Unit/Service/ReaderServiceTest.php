<?php

namespace App\Tests\Unit\Service;

use App\DTO\ReaderOutputDTO;
use App\Entity\Reader;
use App\Mapper\ReaderMapper;
use App\Repository\ReaderRepository;
use App\Service\ReaderService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\Uuid;

class ReaderServiceTest extends TestCase
{
    public function testGetByIdReturnsSuccessMessageWhenReaderExists(): void
    {
        $uuid = Uuid::v4();

        $readerMock = $this->createMock(Reader::class);
        $readerMock->method('getId')->willReturn($uuid);
        $readerMock->method('getUsername')->willReturn('John');
        $readerMock->method('getEmail')->willReturn('john@test.com');
        $readerMock->method('getDateInscription')->willReturn(new \DateTime());
        $readerMock->method('getConnectionSerie')->willReturn(5);
        $readerMock->method('getDateLastConnection')->willReturn(new \DateTime());
        $readerMock->method('getDateLastRead')->willReturn(new \DateTime());
        $readerMock->method('isPremium')->willReturn(true);
        $readerMock->method('getTotalPoint')->willReturn(100);
        $readerMock->method('isConsentementAnalytics')->willReturn(false);

        $readerRepositoryMock = $this->createMock(ReaderRepository::class);
        $readerRepositoryMock->expects($this->once())
            ->method('findOneById')
            ->with($uuid)
            ->willReturn($readerMock);

        $readerMapper = new ReaderMapper();
        $readerService = new ReaderService($readerRepositoryMock, $readerMapper);

        $result = $readerService->getById($uuid);

        $this->assertInstanceOf(ReaderOutputDTO::class, $result);
        $this->assertSame('John', $result->username);
    }

    public function testGetByIdThrowsExceptionWhenReaderDoesNotExist(): void
    {
        $uuid = Uuid::v4();

        $readerRepositoryMock = $this->createMock(ReaderRepository::class);
        $readerRepositoryMock->expects($this->once())
            ->method('findOneById')
            ->with($uuid)
            ->willReturn(null);

        $readerService = new ReaderService($readerRepositoryMock, new ReaderMapper());

        $this->expectException(\InvalidArgumentException::class);
        $readerService->getById($uuid);
    }
}
