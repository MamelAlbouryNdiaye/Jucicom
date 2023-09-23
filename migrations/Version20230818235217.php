<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230818235217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etude (id INT AUTO_INCREMENT NOT NULL, structure_id INT DEFAULT NULL, numero LONGTEXT DEFAULT NULL, nom VARCHAR(500) DEFAULT NULL, INDEX IDX_1DDEA9242534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etude ADD CONSTRAINT FK_1DDEA9242534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE besoin ADD structure_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE besoin ADD CONSTRAINT FK_8118E8112534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('CREATE INDEX IDX_8118E8112534008B ON besoin (structure_id)');
        $this->addSql('ALTER TABLE recommandation ADD structure_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT FK_C7782A282534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('CREATE INDEX IDX_C7782A282534008B ON recommandation (structure_id)');
        $this->addSql('ALTER TABLE resultat_audit ADD structure_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE resultat_audit ADD CONSTRAINT FK_DED75AAB2534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('CREATE INDEX IDX_DED75AAB2534008B ON resultat_audit (structure_id)');
        $this->addSql('ALTER TABLE solutions ADD structure_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE solutions ADD CONSTRAINT FK_A90F77E2534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('CREATE INDEX IDX_A90F77E2534008B ON solutions (structure_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etude DROP FOREIGN KEY FK_1DDEA9242534008B');
        $this->addSql('DROP TABLE etude');
        $this->addSql('ALTER TABLE besoin DROP FOREIGN KEY FK_8118E8112534008B');
        $this->addSql('DROP INDEX IDX_8118E8112534008B ON besoin');
        $this->addSql('ALTER TABLE besoin DROP structure_id');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY FK_C7782A282534008B');
        $this->addSql('DROP INDEX IDX_C7782A282534008B ON recommandation');
        $this->addSql('ALTER TABLE recommandation DROP structure_id');
        $this->addSql('ALTER TABLE resultat_audit DROP FOREIGN KEY FK_DED75AAB2534008B');
        $this->addSql('DROP INDEX IDX_DED75AAB2534008B ON resultat_audit');
        $this->addSql('ALTER TABLE resultat_audit DROP structure_id');
        $this->addSql('ALTER TABLE solutions DROP FOREIGN KEY FK_A90F77E2534008B');
        $this->addSql('DROP INDEX IDX_A90F77E2534008B ON solutions');
        $this->addSql('ALTER TABLE solutions DROP structure_id');
    }
}
