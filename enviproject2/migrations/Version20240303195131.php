<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240303195131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, emplacement_id INT NOT NULL, nom_c VARCHAR(255) NOT NULL, nom_tuteur VARCHAR(255) NOT NULL, date_c DATE NOT NULL, duree_c INT NOT NULL, INDEX IDX_FDCA8C9CC4598A51 (emplacement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emplacement (id INT AUTO_INCREMENT NOT NULL, nom_em VARCHAR(255) NOT NULL, cout DOUBLE PRECISION NOT NULL, capacite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, nom_e VARCHAR(255) NOT NULL, emplacement VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, mail_e VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipement (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT NOT NULL, nom_eq VARCHAR(255) NOT NULL, type_eq VARCHAR(255) NOT NULL, disponibilite_eq VARCHAR(255) NOT NULL, quantite_eq INT NOT NULL, prix_eq DOUBLE PRECISION NOT NULL, INDEX IDX_B8B4C6F3670C757F (fournisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, nom_fr VARCHAR(255) NOT NULL, prenom_fr VARCHAR(255) NOT NULL, age_fr INT NOT NULL, adress_fr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, entreprise_id INT NOT NULL, nom_o VARCHAR(255) NOT NULL, type_o VARCHAR(255) NOT NULL, INDEX IDX_AF86866FA4AEAFEA (entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE succes (id INT AUTO_INCREMENT NOT NULL, type_s VARCHAR(255) NOT NULL, nombenef_s VARCHAR(255) NOT NULL, nomspon_s VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taches (id INT AUTO_INCREMENT NOT NULL, succes_id INT NOT NULL, date_t DATE NOT NULL, type_t VARCHAR(255) NOT NULL, nom_t VARCHAR(255) NOT NULL, nbpart_t INT DEFAULT NULL, empl_t VARCHAR(255) NOT NULL, favoris TINYINT(1) NOT NULL, INDEX IDX_3BF2CD984EF1B4AB (succes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, dn VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CC4598A51 FOREIGN KEY (emplacement_id) REFERENCES emplacement (id)');
        $this->addSql('ALTER TABLE equipement ADD CONSTRAINT FK_B8B4C6F3670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866FA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE taches ADD CONSTRAINT FK_3BF2CD984EF1B4AB FOREIGN KEY (succes_id) REFERENCES succes (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CC4598A51');
        $this->addSql('ALTER TABLE equipement DROP FOREIGN KEY FK_B8B4C6F3670C757F');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866FA4AEAFEA');
        $this->addSql('ALTER TABLE taches DROP FOREIGN KEY FK_3BF2CD984EF1B4AB');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE emplacement');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE equipement');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE succes');
        $this->addSql('DROP TABLE taches');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
