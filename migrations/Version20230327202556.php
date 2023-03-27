<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327202556 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brand DROP FOREIGN KEY FK_1C52F9587975B7E7');
        $this->addSql('DROP INDEX IDX_1C52F9587975B7E7 ON brand');
        $this->addSql('ALTER TABLE brand DROP model_id');
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8545317D1');
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F85FA33B08');
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8E6C5D496');
        $this->addSql('DROP INDEX IDX_FBD8E0F8545317D1 ON job');
        $this->addSql('DROP INDEX IDX_FBD8E0F85FA33B08 ON job');
        $this->addSql('DROP INDEX IDX_FBD8E0F8E6C5D496 ON job');
        $this->addSql('ALTER TABLE job DROP vehicle_id, DROP technician_id, DROP job_type_id');
        $this->addSql('ALTER TABLE job_type DROP FOREIGN KEY FK_B122168D9F8CB2E');
        $this->addSql('DROP INDEX IDX_B122168D9F8CB2E ON job_type');
        $this->addSql('ALTER TABLE job_type DROP job_sub_type_id');
        $this->addSql('ALTER TABLE model DROP FOREIGN KEY FK_D79572D944F5D008');
        $this->addSql('DROP INDEX IDX_D79572D944F5D008 ON model');
        $this->addSql('ALTER TABLE model DROP brand_id');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E48644F5D008');
        $this->addSql('DROP INDEX IDX_1B80E48644F5D008 ON vehicle');
        $this->addSql('ALTER TABLE vehicle DROP brand_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brand ADD model_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE brand ADD CONSTRAINT FK_1C52F9587975B7E7 FOREIGN KEY (model_id) REFERENCES model (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1C52F9587975B7E7 ON brand (model_id)');
        $this->addSql('ALTER TABLE job ADD vehicle_id INT DEFAULT NULL, ADD technician_id INT NOT NULL, ADD job_type_id INT NOT NULL');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8545317D1 FOREIGN KEY (vehicle_id) REFERENCES vehicle (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F85FA33B08 FOREIGN KEY (job_type_id) REFERENCES job_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8E6C5D496 FOREIGN KEY (technician_id) REFERENCES technician (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_FBD8E0F8545317D1 ON job (vehicle_id)');
        $this->addSql('CREATE INDEX IDX_FBD8E0F85FA33B08 ON job (job_type_id)');
        $this->addSql('CREATE INDEX IDX_FBD8E0F8E6C5D496 ON job (technician_id)');
        $this->addSql('ALTER TABLE job_type ADD job_sub_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job_type ADD CONSTRAINT FK_B122168D9F8CB2E FOREIGN KEY (job_sub_type_id) REFERENCES job_sub_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_B122168D9F8CB2E ON job_type (job_sub_type_id)');
        $this->addSql('ALTER TABLE model ADD brand_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D944F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_D79572D944F5D008 ON model (brand_id)');
        $this->addSql('ALTER TABLE vehicle ADD brand_id INT NOT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E48644F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1B80E48644F5D008 ON vehicle (brand_id)');
    }
}
