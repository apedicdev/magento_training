<?php

$setup = new Mage_Catalog_Model_Resource_Setup('core_setup');

$attr = array (
    'attribute_model' => NULL,
    'backend' => NULL,
    'type' => 'int',
    'table' => NULL,
    'frontend' => NULL,
    'input' => 'select',
    'label' => 'training',
    'frontend_class' => NULL,
    'source' => NULL,
    'required' => '0',
    'user_defined' => '1',
    'default' => '',
    'unique' => '0',
    'note' => NULL,
    'input_renderer' => NULL,
    'global' => '1',
    'visible' => '1',
    'searchable' => '1',
    'filterable' => '1',
    'comparable' => '1',
    'visible_on_front' => '1',
    'is_html_allowed_on_front' => '0',
    'is_used_for_price_rules' => '0',
    'filterable_in_search' => '0',
    'used_in_product_listing' => '0',
    'used_for_sort_by' => '0',
    'is_configurable' => '1',
    'apply_to' => 'simple,configurable',
    'visible_in_advanced_search' => '1',
    'position' => '0',
    'wysiwyg_enabled' => '0',
    'used_for_promo_rules' => '0',
    'search_weight' => '1',
    'option' =>
        array (
            'values' =>
                array (
                    0 => 'Grey',
                    1 => 'Ivory',
                    2 => 'Taupe',
                    3 => 'Silver',
                    4 => 'Royal Blue',
                    5 => 'Charcoal',
                    6 => 'Purple',
                    7 => 'Orange',
                    8 => 'Black',
                    9 => 'Pink',
                    10 => 'White',
                    11 => 'Yellow',
                    12 => 'Green',
                    13 => 'Khaki',
                    14 => 'Indigo',
                    15 => 'Blue',
                    16 => 'Red',
                    17 => 'Brown',
                    18 => 'Oatmeal',
                ),
        ),
);
$setup->addAttribute('catalog_product', 'training', $attr);

$attribute = Mage::getModel('eav/entity_attribute')->loadByCode('catalog_product', 'training');
$attribute->setStoreLabels(array (
));
$attribute->save();

