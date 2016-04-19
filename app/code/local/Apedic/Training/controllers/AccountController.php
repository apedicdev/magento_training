<?php

require_once (Mage::getModuleDir('controllers', 'Mage_Customer').DS.'AccountController.php');

class Apedic_Training_AccountController extends Mage_Customer_AccountController{

    public function loginAction()
    {
        $category = Mage::getModel('catalog/category')->load(4);
        $this->_getSession()->setBeforeAuthUrl($category->getUrl());
        if ($this->_getSession()->isLoggedIn()) {
            $this->_redirect('*/*/');
            return;
        }
        $this->getResponse()->setHeader('Login-Required', 'true');
        $this->loadLayout();
        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('catalog/session');
        $this->renderLayout();
    }
}