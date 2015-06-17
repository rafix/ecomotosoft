<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150617114009 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE clientes DROP FOREIGN KEY FK_50FE07D73BFFEBE1');
        $this->addSql('ALTER TABLE empleados DROP FOREIGN KEY FK_9EB2266C3BFFEBE1');
        $this->addSql('ALTER TABLE empresas DROP FOREIGN KEY FK_70DD49A53BFFEBE1');
        $this->addSql('DROP TABLE idiomas');
        $this->addSql('DROP INDEX id_idioma ON clientes');
        $this->addSql('ALTER TABLE clientes DROP id_idioma');
        $this->addSql('DROP INDEX id_idioma ON empleados');
        $this->addSql('ALTER TABLE empleados DROP id_idioma');
        $this->addSql('DROP INDEX nif_cif ON empresas');
        $this->addSql('DROP INDEX numplaca ON empresas');
        $this->addSql('DROP INDEX facebook ON empresas');
        $this->addSql('DROP INDEX logo ON empresas');
        $this->addSql('DROP INDEX web ON empresas');
        $this->addSql('DROP INDEX id_idioma ON empresas');
        $this->addSql('ALTER TABLE empresas DROP id_idioma');
        $this->addSql('DROP INDEX bandera ON paises');
        $this->addSql('ALTER TABLE paises DROP bandera');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE idiomas (id_idioma INT AUTO_INCREMENT NOT NULL, id_pais INT DEFAULT NULL, idioma VARCHAR(30) NOT NULL, UNIQUE INDEX idioma (idioma), INDEX id_pais (id_pais), PRIMARY KEY(id_idioma)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE idiomas ADD CONSTRAINT FK_12A54B7EF57D32FD FOREIGN KEY (id_pais) REFERENCES paises (id_pais)');
        $this->addSql('ALTER TABLE clientes ADD id_idioma INT DEFAULT NULL');
        $this->addSql('ALTER TABLE clientes ADD CONSTRAINT FK_50FE07D73BFFEBE1 FOREIGN KEY (id_idioma) REFERENCES idiomas (id_idioma)');
        $this->addSql('CREATE INDEX id_idioma ON clientes (id_idioma)');
        $this->addSql('ALTER TABLE empleados ADD id_idioma INT DEFAULT NULL');
        $this->addSql('ALTER TABLE empleados ADD CONSTRAINT FK_9EB2266C3BFFEBE1 FOREIGN KEY (id_idioma) REFERENCES idiomas (id_idioma)');
        $this->addSql('CREATE INDEX id_idioma ON empleados (id_idioma)');
        $this->addSql('ALTER TABLE empresas ADD id_idioma INT DEFAULT NULL');
        $this->addSql('ALTER TABLE empresas ADD CONSTRAINT FK_70DD49A53BFFEBE1 FOREIGN KEY (id_idioma) REFERENCES idiomas (id_idioma)');
        $this->addSql('CREATE UNIQUE INDEX nif_cif ON empresas (nif_cif)');
        $this->addSql('CREATE UNIQUE INDEX numplaca ON empresas (numplaca)');
        $this->addSql('CREATE UNIQUE INDEX facebook ON empresas (facebook)');
        $this->addSql('CREATE UNIQUE INDEX logo ON empresas (logo)');
        $this->addSql('CREATE UNIQUE INDEX web ON empresas (web)');
        $this->addSql('CREATE INDEX id_idioma ON empresas (id_idioma)');
        $this->addSql('ALTER TABLE paises ADD bandera VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX bandera ON paises (bandera)');
    }
}
