<?php

namespace App\Tests\Unit;

use App\Entity\Reader;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ReaderPasswordTest extends KernelTestCase
{
    public function testPasswordIsHashedAndNotStoredInPlaintext(): void
    {
        self::bootKernel();

        /** @var UserPasswordHasherInterface $hasher */
        $hasher = static::getContainer()->get('test.password_hasher');

        $reader = new Reader();
        $reader->setEmail('test@example.com');
        $reader->setUsername('testuser');

        $plainPassword = 'MotDePasseSecurise123!';
        $hashedPassword = $hasher->hashPassword($reader, $plainPassword);
        $reader->setPassword($hashedPassword);

        $this->assertNotSame($plainPassword, $reader->getPassword());
        $this->assertTrue($hasher->isPasswordValid($reader, $plainPassword));
    }
}
