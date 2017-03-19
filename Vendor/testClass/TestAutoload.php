<?php
namespace Vendor\testClass;
use App\Shared;
class TestAutoload{
	public function __construct() {

        Shared::echoTestString(__FUNCTION__, get_class($this));
    }
	
}