<?php
namespace Neos\Flow\Persistence\Doctrine\Migrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs! This block will be used as the migration description if getDescription() is not used.
 */
class Version20190905141704 extends AbstractMigration
{

    /**
     * @return string
     */
    public function getDescription()
    {
        return '';
    }

    /**
     * @param Schema $schema
     * @return void
     */
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql("ALTER TABLE unikka_linkchecker_domain_model_resultitem CHANGE originurl originurl VARCHAR(2048) NOT NULL");
        $this->addSql("ALTER TABLE unikka_linkchecker_domain_model_resultitem CHANGE url url VARCHAR(2048) NOT NULL");
    }

    /**
     * @param Schema $schema
     * @return void
     */
    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql("ALTER TABLE unikka_linkchecker_domain_model_resultitem CHANGE originurl originurl VARCHAR(255) NOT NULL");
        $this->addSql("ALTER TABLE unikka_linkchecker_domain_model_resultitem CHANGE url url VARCHAR(255) NOT NULL");
    }
}

