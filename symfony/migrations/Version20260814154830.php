<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260814154830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reader (id UUID NOT NULL, email VARCHAR(180) NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, date_inscription TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, connection_serie INT DEFAULT 0 NOT NULL, date_last_connection DATE NOT NULL, date_last_read DATE NOT NULL, is_premium BOOLEAN NOT NULL, total_point INT NOT NULL, consentement_analytics BOOLEAN NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CC3F893CE7927C74 ON reader (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CC3F893CF85E0677 ON reader (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reader');
    }
}
