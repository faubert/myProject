<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210108235718 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account DROP adress, DROP phone');
        $this->addSql('ALTER TABLE adress ADD account_id INT DEFAULT NULL, DROP account');
        $this->addSql('ALTER TABLE adress ADD CONSTRAINT FK_5CECC7BE9B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id)');
        $this->addSql('CREATE INDEX IDX_5CECC7BE9B6B5FBA ON adress (account_id)');
        $this->addSql('ALTER TABLE phone ADD account_id INT DEFAULT NULL, DROP account');
        $this->addSql('ALTER TABLE phone ADD CONSTRAINT FK_444F97DD9B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id)');
        $this->addSql('CREATE INDEX IDX_444F97DD9B6B5FBA ON phone (account_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account ADD adress VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD phone VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE adress DROP FOREIGN KEY FK_5CECC7BE9B6B5FBA');
        $this->addSql('DROP INDEX IDX_5CECC7BE9B6B5FBA ON adress');
        $this->addSql('ALTER TABLE adress ADD account VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP account_id');
        $this->addSql('ALTER TABLE phone DROP FOREIGN KEY FK_444F97DD9B6B5FBA');
        $this->addSql('DROP INDEX IDX_444F97DD9B6B5FBA ON phone');
        $this->addSql('ALTER TABLE phone ADD account VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP account_id');
    }
}
