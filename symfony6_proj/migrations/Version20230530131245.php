<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230530131245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE other_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE some_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE other_entity (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE some_entity (id INT NOT NULL, title VARCHAR(255) NOT NULL, amount_of_entity INT NOT NULL, insert_date DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE some_entity_other_entity (some_entity_id INT NOT NULL, other_entity_id INT NOT NULL, PRIMARY KEY(some_entity_id, other_entity_id))');
        $this->addSql('CREATE INDEX IDX_205F2C2BD67B0398 ON some_entity_other_entity (some_entity_id)');
        $this->addSql('CREATE INDEX IDX_205F2C2B5FDAF4E8 ON some_entity_other_entity (other_entity_id)');
        $this->addSql('ALTER TABLE some_entity_other_entity ADD CONSTRAINT FK_205F2C2BD67B0398 FOREIGN KEY (some_entity_id) REFERENCES some_entity (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE some_entity_other_entity ADD CONSTRAINT FK_205F2C2B5FDAF4E8 FOREIGN KEY (other_entity_id) REFERENCES other_entity (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE other_entity_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE some_entity_id_seq CASCADE');
        $this->addSql('ALTER TABLE some_entity_other_entity DROP CONSTRAINT FK_205F2C2BD67B0398');
        $this->addSql('ALTER TABLE some_entity_other_entity DROP CONSTRAINT FK_205F2C2B5FDAF4E8');
        $this->addSql('DROP TABLE other_entity');
        $this->addSql('DROP TABLE some_entity');
        $this->addSql('DROP TABLE some_entity_other_entity');
    }
}
