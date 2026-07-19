<?php

namespace App\Tests;

use App\Entity\Reader;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReaderControllerTest extends WebTestCase
{

    /**
     * Cette méthode force explicitement PHPUnit à charger le Kernel
     * Evite le msg d'erreur Kernel au lancement des tests
     */
    protected static function getKernelClass(): string
    {
        return \App\Kernel::class;
    }

    public function testGetReaderApiReturnsCorrectDtoStructure(): void
    {
        // 1. On crée le client HTTP virtuel de Symfony
        $client = static::createClient();

        // 2. On récupère l'Entity Manager
        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');

        // 3. On instancie et on remplit l'entité
        $reader = new Reader();
        $reader->setUsername('JohnDoe')
            ->setMail('john@example.com')
            ->setPassword('secret_hash')
            ->setDateInscription(new \DateTime())
            ->setConnectionSerie(3)
            ->setDateLastConnection(new \DateTime())
            ->setDateLastRead(new \DateTime())
            ->setIsPremium(true)
            ->setTotalPoint(150)
            ->setConsentementAnalytics(false);

        $entityManager->persist($reader);
        $entityManager->flush(); // Postgres génère l'ID ici (ex: 2, 3, 14...)

        // 4. On simule une requête GET sur l'URL de l'API (ici avec l'ID 1)
        $client->request('GET', '/reader/' . $reader->getId());

        // 5. Première barrière : Est-ce que l'API répond un code HTTP 200 (OK) ?
        $this->assertResponseIsSuccessful();

        // 6. Deuxième barrière : Est-ce que c'est bien du JSON qui est renvoyé ?
        $this->assertResponseHeaderSame('content-type', 'application/json');

        // 7. On récupère le contenu JSON et on le décode sous forme de tableau PHP
        $jsonResponse = $client->getResponse()->getContent();
        $data = json_decode($jsonResponse, true);

        // 8. On vérifie la présence de CHAQUE champ de ReaderOutputDTO
        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('username', $data);
        $this->assertArrayHasKey('mail', $data);
        $this->assertArrayHasKey('date_inscription', $data);
        $this->assertArrayHasKey('connection_serie', $data);
        $this->assertArrayHasKey('date_last_connection', $data);
        $this->assertArrayHasKey('date_last_read', $data);
        $this->assertArrayHasKey('is_premium', $data);
        $this->assertArrayHasKey('total_point', $data);
        $this->assertArrayHasKey('consentement_analytics', $data);

        // 9. Sécurité : On s'assure qu'un champ secret (comme le mot de passe) N'EST PAS dans le JSON
        $this->assertArrayNotHasKey('password', $data);
    }

    public function testGetReaderApiReturns404IfNotFound(): void
    {
        $client = static::createClient();

        // On teste un ID qui n'existe absolument pas (ex: 99999)
        $client->request('GET', '/reader/99999');

        // On vérifie que le contrôleur attrape bien l'exception et renvoie une erreur 404
        $this->assertResponseStatusCodeSame(404);
    }
}