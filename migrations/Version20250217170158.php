<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DoctrineMigrations;

use App\Doctrine\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * @version 2.x
 */
final class Version20250217170158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->abortIf(true, 'Migration was auto-generated, adapt to your needs before running it.');

        $this->addSql('ALTER TABLE kimai2_timesheet ADD day VARCHAR(20) DEFAULT NULL, ADD jira_ids VARCHAR(255) DEFAULT NULL, ADD location VARCHAR(20) DEFAULT NULL, CHANGE description description LONGTEXT DEFAULT NULL, CHANGE billable billable TINYINT(1) DEFAULT 1 NOT NULL, CHANGE modified_at modified_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE date_tz date_tz DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\'');
        $this->addSql('ALTER TABLE kimai2_timesheet_tags RENAME INDEX idx_e3284efeabdd46be TO IDX_732EECA9ABDD46BE');
        $this->addSql('ALTER TABLE kimai2_timesheet_tags RENAME INDEX idx_e3284efebad26311 TO IDX_732EECA9BAD26311');
        $this->addSql('ALTER TABLE kimai2_user_preferences CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE kimai2_users CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE kimai2_working_times CHANGE approved_at approved_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE kimai2_sessions CHANGE id id VARBINARY(128) NOT NULL, CHANGE data data LONGBLOB NOT NULL');
        $this->addSql('CREATE INDEX lifetime_idx ON kimai2_sessions (lifetime)');
    }

    public function down(Schema $schema): void
    {
        $this->abortIf(true, 'Migration was auto-generated, adapt to your needs before running it.');

        $this->addSql('DROP INDEX lifetime_idx ON kimai2_sessions');
        $this->addSql('ALTER TABLE kimai2_sessions CHANGE id id VARCHAR(128) NOT NULL, CHANGE data data BLOB NOT NULL');
        $this->addSql('ALTER TABLE kimai2_timesheet DROP day, DROP jira_ids, DROP location, CHANGE date_tz date_tz DATE NOT NULL, CHANGE description description TEXT DEFAULT NULL, CHANGE billable billable TINYINT(1) DEFAULT 1, CHANGE modified_at modified_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE kimai2_timesheet_tags RENAME INDEX idx_732eeca9abdd46be TO IDX_E3284EFEABDD46BE');
        $this->addSql('ALTER TABLE kimai2_timesheet_tags RENAME INDEX idx_732eeca9bad26311 TO IDX_E3284EFEBAD26311');
        $this->addSql('ALTER TABLE kimai2_user_preferences CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE kimai2_users CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE kimai2_working_times CHANGE approved_at approved_at DATETIME DEFAULT NULL');
    }

    public function isTransactional(): bool
    {
        return false;
    }
}
