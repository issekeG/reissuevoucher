<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240210121833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, title VARCHAR(255) NOT NULL, status VARCHAR(255) DEFAULT \'Pending\' NOT NULL, embed_video_link VARCHAR(300) NOT NULL, description VARCHAR(1500) NOT NULL, INDEX IDX_7CC7DA2C12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voucher (id INT AUTO_INCREMENT NOT NULL, reason VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, id_number VARCHAR(255) NOT NULL, gift_card_number VARCHAR(255) NOT NULL, original_issuing_store VARCHAR(255) NOT NULL, date_of_purchase DATE NOT NULL, time_of_purchase TIME NOT NULL, value_loaded_on_card VARCHAR(255) NOT NULL, further_details VARCHAR(1000) NOT NULL, requested_by VARCHAR(255) NOT NULL, requested_by_signature VARCHAR(255) NOT NULL, requested_date DATE NOT NULL, authorized_by VARCHAR(255) DEFAULT NULL, authorized_signature VARCHAR(255) DEFAULT NULL, authorized_date DATE DEFAULT NULL, new_evoucher_reference VARCHAR(255) NOT NULL, new_evoucher_date DATE NOT NULL, card_linked_to VARCHAR(255) NOT NULL, delivered_to VARCHAR(255) NOT NULL, status VARCHAR(255) DEFAULT \'Pending\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voucher_user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8CFE56F1E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C12469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE video');
        $this->addSql('DROP TABLE voucher');
        $this->addSql('DROP TABLE voucher_user');
    }
}
