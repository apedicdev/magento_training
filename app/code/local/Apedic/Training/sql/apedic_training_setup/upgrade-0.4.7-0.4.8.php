<?php

$setup = new Mage_Catalog_Model_Resource_Setup('core_setup');

$attr=  array(
    "type"     => "varchar",
    "backend"  => "apedic_training/entity_attribute_backend_customer_customerhobbies",
    "label"    => "hobbies",
    "input"    => "multiselect",
    "source"   => "apedic_training/entity_attribute_source_customer_customerhobbies",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

);

$setup->addAttribute('customer', 'hobbies', $attr);

$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "hobbies");


$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
;
$attribute->save();