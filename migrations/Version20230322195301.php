<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230322195301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brand ADD model_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE brand ADD CONSTRAINT FK_1C52F9587975B7E7 FOREIGN KEY (model_id) REFERENCES model (id)');
        $this->addSql('CREATE INDEX IDX_1C52F9587975B7E7 ON brand (model_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brand DROP FOREIGN KEY FK_1C52F9587975B7E7');
        $this->addSql('DROP INDEX IDX_1C52F9587975B7E7 ON brand');
        $this->addSql('ALTER TABLE brand DROP model_id');
    }
}
