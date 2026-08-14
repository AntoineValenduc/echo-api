<?php

namespace App\Entity;

use App\Repository\ReaderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReaderRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé.')]
#[UniqueEntity(fields: ['username'], message: 'Ce pseudo est déjà utilisé.')]
class Reader implements UserInterface, PasswordAuthenticatedUserInterface
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';

    #[ORM\Id]
    #[ORM\Column(type: 'uuid', unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    private ?Uuid $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(length: 50, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 50)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: Types::JSON)]
    private array $roles = [self::ROLE_USER];

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_inscription = null;

    #[ORM\Column(options: ['default' => 0])]
    private int $connection_serie = 0;

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

    public function __construct()
    {
        $this->date_inscription = new \DateTime();
    }

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = self::ROLE_USER;

        return array_values(array_unique($roles));
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function addRole(string $role): static
    {
        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }

        return $this;
    }

    public function removeRole(string $role): static
    {
        $this->roles = array_values(array_filter(
            $this->roles,
            fn (string $r) => $r !== $role
        ));

        return $this;
    }

    public function isAdmin(): bool
    {
        return in_array(self::ROLE_ADMIN, $this->roles, true);
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->date_inscription;
    }

    public function getConnectionSerie(): int
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

    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    public function eraseCredentials(): void
    {
    }
}
