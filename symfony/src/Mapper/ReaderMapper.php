<?php

namespace App\Mapper;

use App\Entity\Reader;
use App\DTO\ReaderOutputDTO;

class ReaderMapper
{
    /**
     * Transforme une entité Reader en un DTO propre pour l'affichage
     */
    public function toOutputDTO(Reader $reader): ReaderOutputDTO
    {
        return new ReaderOutputDTO(
            id: $reader->getId(),
            username: $reader->getUsername(),
            mail: $reader->getMail(),
            date_inscription: $reader->getDateInscription(),
            connection_serie: $reader->getConnectionSerie(),
            date_last_connection: $reader->getDateLastConnection(),
            date_last_read: $reader->getDateLastRead(),
            is_premium: $reader->isPremium(),
            total_point: $reader->getTotalPoint(),
            consentement_analytics: $reader->isConsentementAnalytics(),
        );
    }
}