<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170828074547 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AC11D7DD1');
        $this->addSql('DROP INDEX IDX_B3BA5A5AC11D7DD1 ON products');
        $this->addSql('ALTER TABLE products ADD product_promotion DOUBLE PRECISION NOT NULL, ADD is_removed TINYINT(1) NOT NULL, DROP promotion');
        $this->addSql('ALTER TABLE product_categories ADD is_removed TINYINT(1) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product_categories DROP is_removed');
        $this->addSql('ALTER TABLE products ADD promotion INT DEFAULT NULL, DROP product_promotion, DROP is_removed');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AC11D7DD1 FOREIGN KEY (promotion) REFERENCES promotions (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_B3BA5A5AC11D7DD1 ON products (promotion)');
    }
}
