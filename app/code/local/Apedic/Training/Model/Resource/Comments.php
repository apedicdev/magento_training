<?php

class Apedic_Training_Model_Resource_Comments extends Mage_Core_Model_Resource_Db_Abstract{
    public function _construct()
    {
        $this->_init('apedic_training/comments', 'comment_id');
    }
}