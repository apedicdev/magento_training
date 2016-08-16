<?php

class Apedic_Training_Block_Comments extends Mage_Core_Block_Template{


    public function getComments(){
        /**
         * get Controller name
         */
        if($product=Mage::registry('current_product')){
            $entity_id=$product->getId();
        }
        
        $comments=Mage::getModel('apedic_training/comments')->getCollection()->addFieldToFilter('page_id', array('eq'=>$entity_id));
        foreach ($comments as $comment){
            $commentsText[]=$comment->getCommentText();
        }
        return $commentsText;
    }

    public function getFormActionUrl(){
        return $this->getUrl('training/comments/submit');
    }
}