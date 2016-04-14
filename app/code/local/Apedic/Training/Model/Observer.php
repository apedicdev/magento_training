<?php

class Apedic_Training_Model_Observer extends Varien_Event_Observer{
    public function redirectCmsHome($observer){

        $urlString = Mage::helper('core/url')->getCurrentUrl();
        $url = Mage::getSingleton('core/url')->parseUrl($urlString);
        $path = $url->getPath();

        if ($path=='/home'){
            Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::helper('core/url')->getHomeUrl());
        }

    }
}