<?php

class Apedic_Training_Model_Comments extends Mage_Core_Model_Abstract{
    public function _construct()
    {
    $this->_init('apedic_training/comments');
    }

    public function loadByEntityId($entityId)
    {
        $this->_getResource()->loadByEntityId($this, $entityId);
        return $this;
    }
}