<?php

class Ball {
    public function __invoke() {
        //echo "flutter";
        Shared::echoTestString(__FUNCTION__, get_class($this));
    }
}