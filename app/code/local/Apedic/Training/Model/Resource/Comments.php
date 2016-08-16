<?php

class Apedic_Training_Model_Resource_Comments extends Mage_Core_Model_Resource_Db_Abstract{
    public function _construct()
    {
        $this->_init('apedic_training/comments', 'comment_id');
    }

    public function loadByEntityId(Apedic_Training_Model_Comments $comment, $entityId)
    {
        $adapter = $this->_getReadAdapter();
        $bind    = array('page_id' => $entityId);
        $table=$this->getEntityTable();
        $select  = $adapter->select()
            ->from($this->getEntityTable(), array($this->getEntityIdField()))
            ->where('page_id = :page_id');
        

        $commentId = $adapter->fetchOne($select, $bind);
        if ($commentId) {
            $this->load($comment, $commentId);
        } else {
            $comment->setData(array());
        }

        return $this;
    }
}