<?php
class Vehicle{

    public function __construct() {
        //echo "Call __construct method from class ". get_class($this)."\n";
        //$this->echoTestString("__construct");
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }

    public function __destruct() {
        //echo "Call __destruct method from class ".get_class($this)."\n";
        //$this->echoTestString("__destruct");
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }

    public function __get($field){
        if($field=="colour"){
            //echo "Call __get method from class ".get_class($this)."\n";
            //$this->echoTestString("__get");
            Shared::echoTestString(__FUNCTION__, get_class($this));
        }
    }

    public function __set($field, $value){
        if($field=="colour"){
            //$this->colour=$value;
            //$this->echoTestString("__set");
            Shared::echoTestString(__FUNCTION__, get_class($this));
        }
    }

    public function __call($method, $args){
        //echo "Unknown method $method\n";
        //$this->echoTestString("__call");
        Shared::echoTestString(__FUNCTION__, get_class($this));
        return false;
    }

    static function __callStatic($method, $args){
        //Vehicle::echoTestString("__callStatic");
        //Shared::echoTestString("__callStatic", "Vehicle");
        Shared::echoTestString(__FUNCTION__, __CLASS__);
    }

    /*static function echoTestString($method){
        echo "Call $method method from class Vehicle\n";
    }*/
}