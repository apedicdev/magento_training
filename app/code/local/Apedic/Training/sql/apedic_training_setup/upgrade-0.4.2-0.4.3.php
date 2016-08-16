<?php

$installer = $this;
$connection = $installer->getConnection();

$installer->startSetup();

$installer->getConnection()
    ->addColumn($installer->getTable('apedic_training/comments'),
        'page_type',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
            'length'=> 3,
            'nullable' => false,
            'comment' => 'type of page',

        )
    );

$installer->getConnection()
    ->addColumn($installer->getTable('apedic_training/comments'),
        'comment_text',
        array(
            'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
            'nullable' => false,
            'comment' => 'comment text'
        )
    );

$installer->endSetup();

