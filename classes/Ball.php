<?php
namespace App;

class Ball {
    public function __invoke() {
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }
}