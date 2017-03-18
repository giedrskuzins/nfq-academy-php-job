<?php
namespace App;
class Vehicle{

    public function __construct() {

        Shared::echoTestString(__FUNCTION__, get_class($this));
    }

    public function __destruct() {

        Shared::echoTestString(__FUNCTION__, get_class($this));
    }

    public function __get($field){
        if($field=="colour"){

            Shared::echoTestString(__FUNCTION__, get_class($this));
        }
    }

    public function __set($field, $value){
        if($field=="colour"){

            Shared::echoTestString(__FUNCTION__, get_class($this));
        }
    }

    public function __call($method, $args){

        Shared::echoTestString(__FUNCTION__, get_class($this));
        return false;
    }

    static function __callStatic($method, $args){

        Shared::echoTestString(__FUNCTION__, __CLASS__);
    }


}