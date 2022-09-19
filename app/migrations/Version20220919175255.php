<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220919175255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE friend_ship ADD friend_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE friend_ship ADD CONSTRAINT FK_604A37C46A5458E8 FOREIGN KEY (friend_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_604A37C46A5458E8 ON friend_ship (friend_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE friend_ship DROP FOREIGN KEY FK_604A37C46A5458E8');
        $this->addSql('DROP INDEX IDX_604A37C46A5458E8 ON friend_ship');
        $this->addSql('ALTER TABLE friend_ship DROP friend_id');
    }
}
