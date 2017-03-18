<?php
namespace App\Test\Other;
use App\Shared;
class TestSetState {
    private $value1_;
    private $value2_;

    function __construct() {
        $this->value1_ = 200;
        $this->value2_ = "200";
    }

    static function __set_state(array $array) {
        Shared::echoTestString(__FUNCTION__, __CLASS__);
        foreach($array as $k => $v) {
            echo("$k ==> $v \n");
        }
    }
}