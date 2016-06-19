<?php

class Apedic_Training_Model_Resource_Comments_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{
    public function _construct()
    {
        $this->_init('apedic_training/comments');
    }
}