<?php

class Cloneable{
    public function __clone(){
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }

    public function __toString(){
        Shared::echoTestString(__FUNCTION__, get_class($this));
        return "";
        //return true;
    }
}