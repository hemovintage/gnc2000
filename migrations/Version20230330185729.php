<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330185729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job ADD technician_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8E6C5D496 FOREIGN KEY (technician_id) REFERENCES technician (id)');
        $this->addSql('CREATE INDEX IDX_FBD8E0F8E6C5D496 ON job (technician_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8E6C5D496');
        $this->addSql('DROP INDEX IDX_FBD8E0F8E6C5D496 ON job');
        $this->addSql('ALTER TABLE job DROP technician_id');
    }
}
