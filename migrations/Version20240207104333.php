<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207104333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE voucher (id INT AUTO_INCREMENT NOT NULL, reason VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, id_number VARCHAR(255) NOT NULL, gift_card_number VARCHAR(255) NOT NULL, original_issuing_store VARCHAR(255) NOT NULL, date_of_purchase DATE NOT NULL, time_of_purchase TIME NOT NULL, value_loaded_on_card VARCHAR(255) NOT NULL, further_details VARCHAR(1000) NOT NULL, requested_by VARCHAR(255) NOT NULL, requested_by_signature VARCHAR(255) NOT NULL, requested_date DATE NOT NULL, authorized_by VARCHAR(255) DEFAULT NULL, authorized_signature VARCHAR(255) DEFAULT NULL, authorized_date DATE DEFAULT NULL, new_evoucher_reference VARCHAR(255) NOT NULL, new_evoucher_date DATE NOT NULL, card_linked_to VARCHAR(255) NOT NULL, delivered_to VARCHAR(255) NOT NULL, status VARCHAR(255) DEFAULT \'Pending\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE voucher');
    }
}
