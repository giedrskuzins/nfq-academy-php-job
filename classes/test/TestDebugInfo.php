<?php

class TestDebugInfo{
    function __debugInfo(){
        //return call_user_func('get_object_vars', $this);
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }
}