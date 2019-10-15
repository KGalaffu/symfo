<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191015125944 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE livres_location ADD livre_id INT NOT NULL');
        $this->addSql('ALTER TABLE livres_location ADD CONSTRAINT FK_8A59FF5F37D925CB FOREIGN KEY (livre_id) REFERENCES livres (id)');
        $this->addSql('CREATE INDEX IDX_8A59FF5F37D925CB ON livres_location (livre_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE livres_location DROP FOREIGN KEY FK_8A59FF5F37D925CB');
        $this->addSql('DROP INDEX IDX_8A59FF5F37D925CB ON livres_location');
        $this->addSql('ALTER TABLE livres_location DROP livre_id');
    }
}
