<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230208173133 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE announcement ADD immatriculation VARCHAR(20) NOT NULL, ADD marque VARCHAR(50) NOT NULL, ADD model VARCHAR(100) NOT NULL, ADD kilometrage INT NOT NULL, ADD annee INT NOT NULL, ADD energie VARCHAR(50) DEFAULT NULL, ADD type_boite VARCHAR(50) DEFAULT NULL, ADD puissance_fiscale INT DEFAULT NULL, CHANGE ville ville VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE announcement DROP immatriculation, DROP marque, DROP model, DROP kilometrage, DROP annee, DROP energie, DROP type_boite, DROP puissance_fiscale, CHANGE ville ville VARCHAR(255) DEFAULT NULL');
    }
}
