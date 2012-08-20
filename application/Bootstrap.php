<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        // autoload application 
        $autoLoader = new Zend_Application_Module_Autoloader( array(
            'namespace' => '',
            'basePath' => APPLICATION_PATH, 
        ));

        return $autoLoader;
    }

}

