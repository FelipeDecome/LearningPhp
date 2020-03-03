<?php

declare(strict_types=1);

namespace Felipe\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200303210108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE Cursos (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE cursos_cliente (cursos_id INTEGER NOT NULL, cliente_id INTEGER NOT NULL, PRIMARY KEY(cursos_id, cliente_id))');
        $this->addSql('CREATE INDEX IDX_25D932E76AFE7B9A ON cursos_cliente (cursos_id)');
        $this->addSql('CREATE INDEX IDX_25D932E7DE734E51 ON cursos_cliente (cliente_id)');
        $this->addSql('DROP INDEX IDX_D8448137DE734E51');
        $this->addSql('CREATE TEMPORARY TABLE __temp__Telefone AS SELECT id, cliente_id, number FROM Telefone');
        $this->addSql('DROP TABLE Telefone');
        $this->addSql('CREATE TABLE Telefone (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, cliente_id INTEGER DEFAULT NULL, number VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_D8448137DE734E51 FOREIGN KEY (cliente_id) REFERENCES Cliente (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO Telefone (id, cliente_id, number) SELECT id, cliente_id, number FROM __temp__Telefone');
        $this->addSql('DROP TABLE __temp__Telefone');
        $this->addSql('CREATE INDEX IDX_D8448137DE734E51 ON Telefone (cliente_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE Cursos');
        $this->addSql('DROP TABLE cursos_cliente');
        $this->addSql('DROP INDEX IDX_D8448137DE734E51');
        $this->addSql('CREATE TEMPORARY TABLE __temp__Telefone AS SELECT id, cliente_id, number FROM Telefone');
        $this->addSql('DROP TABLE Telefone');
        $this->addSql('CREATE TABLE Telefone (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, cliente_id INTEGER DEFAULT NULL, number VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO Telefone (id, cliente_id, number) SELECT id, cliente_id, number FROM __temp__Telefone');
        $this->addSql('DROP TABLE __temp__Telefone');
        $this->addSql('CREATE INDEX IDX_D8448137DE734E51 ON Telefone (cliente_id)');
    }
}
