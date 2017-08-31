<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170831221335 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE money_flow ADD admin_authentifier INT DEFAULT NULL');
        $this->addSql('ALTER TABLE money_flow ADD CONSTRAINT FK_BD4C75779ED6A804 FOREIGN KEY (admin_authentifier) REFERENCES users (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_BD4C75779ED6A804 ON money_flow (admin_authentifier)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE money_flow DROP FOREIGN KEY FK_BD4C75779ED6A804');
        $this->addSql('DROP INDEX IDX_BD4C75779ED6A804 ON money_flow');
        $this->addSql('ALTER TABLE money_flow DROP admin_authentifier');
    }
}