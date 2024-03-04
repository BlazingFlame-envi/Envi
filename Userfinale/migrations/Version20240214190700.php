<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240214190700 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE succes ADD taches_id INT NOT NULL, CHANGE nom_sponsor noms_sponsor VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE succes ADD CONSTRAINT FK_BFC22383B8A61670 FOREIGN KEY (taches_id) REFERENCES taches (id)');
        $this->addSql('CREATE INDEX IDX_BFC22383B8A61670 ON succes (taches_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE succes DROP FOREIGN KEY FK_BFC22383B8A61670');
        $this->addSql('DROP INDEX IDX_BFC22383B8A61670 ON succes');
        $this->addSql('ALTER TABLE succes DROP taches_id, CHANGE noms_sponsor nom_sponsor VARCHAR(255) NOT NULL');
    }
}
