<?php

namespace App\Tests;

use App\Entity\Reader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReaderControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $entityManager;

    protected static function getKernelClass(): string
    {
        return \App\Kernel::class;
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = static::createClient();
        $this->entityManager = static::getContainer()->get('doctrine.orm.entity_manager');
    }

    protected function tearDown(): void
    {
        $this->entityManager->createQuery('DELETE FROM App\Entity\Reader r WHERE r.email = :email')
            ->setParameter('email', 'john@example.com')
            ->execute();

        $this->entityManager->close();

        parent::tearDown();
    }

    public function testGetReaderApiReturnsCorrectDtoStructure(): void
    {
        $reader = new Reader();
        $reader->setUsername('JohnDoe')
            ->setEmail('john@example.com')
            ->setPassword('secret_hash')
            ->setConnectionSerie(3)
            ->setDateLastConnection(new \DateTime())
            ->setDateLastRead(new \DateTime())
            ->setIsPremium(true)
            ->setTotalPoint(150)
            ->setConsentementAnalytics(false);

        $this->entityManager->persist($reader);
        $this->entityManager->flush();

        $this->client->request('GET', '/reader/' . $reader->getId());

        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('content-type', 'application/json');

        $jsonResponse = $this->client->getResponse()->getContent();
        $data = json_decode($jsonResponse, true);

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('username', $data);
        $this->assertArrayHasKey('email', $data);
        $this->assertArrayHasKey('date_inscription', $data);
        $this->assertArrayHasKey('connection_serie', $data);
        $this->assertArrayHasKey('date_last_connection', $data);
        $this->assertArrayHasKey('date_last_read', $data);
        $this->assertArrayHasKey('is_premium', $data);
        $this->assertArrayHasKey('total_point', $data);
        $this->assertArrayHasKey('consentement_analytics', $data);

        $this->assertArrayNotHasKey('password', $data);
    }

    public function testGetReaderApiReturns404IfNotFound(): void
    {
        $this->client->request('GET', '/reader/00000000-0000-0000-0000-000000000000');

        $this->assertResponseStatusCodeSame(404);
    }
}
