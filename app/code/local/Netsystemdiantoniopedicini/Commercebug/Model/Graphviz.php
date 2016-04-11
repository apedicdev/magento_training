<?php
/**
* Copyright © Pulsestorm LLC: All rights reserved
*/
class Netsystemdiantoniopedicini_Commercebug_Model_Graphviz
{
    public function capture()
    {    
        $collector  = new Netsystemdiantoniopedicini_Commercebug_Model_Collectorgraphviz; 
        $o = new stdClass();
        $o->dot = Netsystemdiantoniopedicini_Commercebug_Model_Observer_Dot::renderGraph();
        $collector->collectInformation($o);
    }
    
    public function getShim()
    {
        $shim = Netsystemdiantoniopedicini_Commercebug_Model_Shim::getInstance();        
        return $shim;
    }    
}