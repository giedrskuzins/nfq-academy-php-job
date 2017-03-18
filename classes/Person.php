<?php
namespace App;
class Person{
    private $configArray=array();

    public function setConfigArrayVal($key, $val){
        $this->configArray[$key]=$val;
    }

    public function __sleep(){
        Shared::echoTestString(__FUNCTION__, get_class($this));
        return array('configArray');
    }

    public function __wakeup(){
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }

}

