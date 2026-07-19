<?php

namespace App\Entity;

use App\Repository\ReaderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReaderRepository::class)]
class Reader
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $username = null;

    #[ORM\Column(length: 180)]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_inscription = null;

    #[ORM\Column]
    private ?int $connection_serie = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_last_connection = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_last_read = null;

    #[ORM\Column]
    private ?bool $is_premium = null;

    #[ORM\Column]
    private ?int $total_point = null;

    #[ORM\Column]
    private ?bool $consentement_analytics = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getDateInscription(): ?\DateTime
    {
        return $this->date_inscription;
    }

    public function setDateInscription(\DateTime $date_inscription): static
    {
        $this->date_inscription = $date_inscription;

        return $this;
    }

    public function getConnectionSerie(): ?int
    {
        return $this->connection_serie;
    }

    public function setConnectionSerie(int $connection_serie): static
    {
        $this->connection_serie = $connection_serie;

        return $this;
    }

    public function getDateLastConnection(): ?\DateTime
    {
        return $this->date_last_connection;
    }

    public function setDateLastConnection(\DateTime $date_last_connection): static
    {
        $this->date_last_connection = $date_last_connection;

        return $this;
    }

    public function getDateLastRead(): ?\DateTime
    {
        return $this->date_last_read;
    }

    public function setDateLastRead(\DateTime $date_last_read): static
    {
        $this->date_last_read = $date_last_read;

        return $this;
    }

    public function isPremium(): ?bool
    {
        return $this->is_premium;
    }

    public function setIsPremium(bool $is_premium): static
    {
        $this->is_premium = $is_premium;

        return $this;
    }

    public function getTotalPoint(): ?int
    {
        return $this->total_point;
    }

    public function setTotalPoint(int $total_point): static
    {
        $this->total_point = $total_point;

        return $this;
    }

    public function isConsentementAnalytics(): ?bool
    {
        return $this->consentement_analytics;
    }

    public function setConsentementAnalytics(bool $consentement_analytics): static
    {
        $this->consentement_analytics = $consentement_analytics;

        return $this;
    }
}
