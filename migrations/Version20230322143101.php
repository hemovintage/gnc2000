<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230322143101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE model ADD brand_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D944F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('CREATE INDEX IDX_D79572D944F5D008 ON model (brand_id)');
        $this->addSql('ALTER TABLE brand DROP FOREIGN KEY FK_1C52F9587975B7E7');
        $this->addSql('ALTER TABLE brand DROP COLUMN model_id, DROP INDEX IDX_1C52F9587975B7E7');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE model DROP FOREIGN KEY FK_D79572D944F5D008');
        $this->addSql('DROP INDEX IDX_D79572D944F5D008 ON model');
        $this->addSql('ALTER TABLE model DROP brand_id');
        $this->addSql('ALTER TABLE brand ADD CONSTRAINT FK_1C52F9587975B7E7 FOREIGN KEY (model_id) REFERENCES model (id)');
    }
}
