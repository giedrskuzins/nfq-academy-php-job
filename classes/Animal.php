<?php

class Animal{
    private $propertiesArr=array();

    function __construct()
    {
        $this->propertiesArr['name']='wolf';
    }

    public function __isset($name)
    {
        Shared::echoTestString(__FUNCTION__, get_class($this));
        echo "Is '$name' set?\n";
        return isset($this->propertiesArr[$name]);
    }


    public function __unset($name)
    {
        Shared::echoTestString(__FUNCTION__, get_class($this));
        echo "Unsetting '$name'\n";
        unset($this->propertiesArr[$name]);

    }


}