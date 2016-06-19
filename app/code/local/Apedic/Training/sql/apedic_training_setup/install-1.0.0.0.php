<?php

$installer = $this;
$installer->startSetup();

/*
 * Create all entity tables
 */
$installer->createEntityTables(
    $this->getTable('apedic_training/comments_entity')
);

/*
 * Add Entity type
 */
$installer->addEntityType('apedic_training_comments',Array(
    'entity_model'          =>'apedic_training/comments',
    'attribute_model'       =>'',
    'table'                 =>'apedic_training/comments_entity',
    'increment_model'       =>'',
    'increment_per_store'   =>'0'
));

//$installer->installEntities();

$installer->endSetup();