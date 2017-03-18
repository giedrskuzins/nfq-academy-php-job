<?php
namespace App\Test;
use App\Shared;
class TestDebugInfo{
    function __debugInfo(){
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }
}