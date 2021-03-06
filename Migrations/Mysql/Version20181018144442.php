<?php
namespace Neos\Flow\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs! This block will be used as the migration description if getDescription() is not used.
 */
class Version20181018144442 extends AbstractMigration
{

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Add initial ResultItem model table';
    }

    /**
     * @param Schema $schema
     * @return void
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     * @throws \Doctrine\DBAL\DBALException
     */
    public function up(Schema $schema): void
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on "mysql".');
        
        $this->addSql('CREATE TABLE unikka_linkchecker_domain_model_resultitem (persistence_object_identifier VARCHAR(40) NOT NULL, createdat DATETIME NOT NULL, checkedat DATETIME NOT NULL, originurl VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, statuscode INT NOT NULL, PRIMARY KEY(persistence_object_identifier)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     * @return void
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     * @throws \Doctrine\DBAL\DBALException
     */
    public function down(Schema $schema): void
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on "mysql".');

        $this->addSql('DROP TABLE unikka_linkchecker_domain_model_resultitem');
    }
}
