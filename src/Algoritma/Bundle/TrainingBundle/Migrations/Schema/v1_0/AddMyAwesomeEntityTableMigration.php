<?php

namespace Algoritma\Bundle\TrainingBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class AddMyAwesomeEntityTableMigration implements Migration
{
    public function up(Schema $schema, QueryBag $queries): void
    {
        $table = $schema->createTable('my_awesome_entity');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->addColumn('description', 'text');
        $table->setPrimaryKey(['id']);
    }
}