<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191015124413 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE livres_loue (id INT AUTO_INCREMENT NOT NULL, dates_location DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livres_loue_patient (livres_loue_id INT NOT NULL, patient_id INT NOT NULL, INDEX IDX_FFDED385F05446AF (livres_loue_id), INDEX IDX_FFDED3856B899279 (patient_id), PRIMARY KEY(livres_loue_id, patient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE livres_loue_patient ADD CONSTRAINT FK_FFDED385F05446AF FOREIGN KEY (livres_loue_id) REFERENCES livres_loue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livres_loue_patient ADD CONSTRAINT FK_FFDED3856B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE livres_loue_patient DROP FOREIGN KEY FK_FFDED385F05446AF');
        $this->addSql('DROP TABLE livres_loue');
        $this->addSql('DROP TABLE livres_loue_patient');
    }
}
