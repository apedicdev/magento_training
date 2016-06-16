<?php

class Apedic_Training_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        //$this->loadLayout();
        echo $this->getFullActionName();
        //$this->renderLayout();
    }

    public function customAction(){
        $this->loadLayout("custom_handle");
        $this->renderLayout();
    }
}