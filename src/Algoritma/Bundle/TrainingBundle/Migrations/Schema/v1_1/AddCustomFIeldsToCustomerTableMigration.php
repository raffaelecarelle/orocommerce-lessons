<?php

namespace Algoritma\Bundle\TrainingBundle\Migrations\Schema\v1_1;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\EntityBundle\EntityConfig\DatagridScope;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class AddCustomFIeldsToCustomerTableMigration implements Migration
{
    public function up(Schema $schema, QueryBag $queries)
    {
        $table = $schema->getTable('oro_customer');
        $table->addColumn('fiscal_code', 'string', [
                'notnull' => false,
                'length' => 16,
                'oro_options' => [
                    'extend'    => ['is_extend' => true, 'owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid'  => ['is_visible' => DatagridScope::IS_VISIBLE_TRUE],
                    'form' => ['is_enabled' => true,],
                    'view' => ['is_displayable' => true],
                    'dataaudit' => ['auditable' => true]
                ]
            ]);
            $table->addColumn('vat', 'string', [
                'notnull' => false,
                'length' => 16,
                'oro_options' => [
                    'extend'    => ['is_extend' => true, 'owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid'  => ['is_visible' => DatagridScope::IS_VISIBLE_TRUE],
                    'form' => ['is_enabled' => true,],
                    'view' => ['is_displayable' => true],
                    'dataaudit' => ['auditable' => true]
                ]
            ]);
            $table->addColumn('pec', 'string', [
                'notnull' => false,
                'length' => 100,
                'oro_options' => [
                    'extend'    => ['is_extend' => true, 'owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid'  => ['is_visible' => DatagridScope::IS_VISIBLE_TRUE],
                    'form' => ['is_enabled' => true,],
                    'view' => ['is_displayable' => true],
                    'dataaudit' => ['auditable' => true]
                ]
            ]);
            $table->addColumn('sdi', 'string', [
                'notnull' => false,
                'length' => 7,
                'oro_options' => [
                    'extend'    => ['is_extend' => true, 'owner' => ExtendScope::OWNER_CUSTOM],
                    'datagrid'  => ['is_visible' => DatagridScope::IS_VISIBLE_TRUE],
                    'form' => ['is_enabled' => true,],
                    'view' => ['is_displayable' => true],
                    'dataaudit' => ['auditable' => true]
                ]
            ]);
        ;
    }
}