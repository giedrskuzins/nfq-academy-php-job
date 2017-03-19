<?php

require_once("classes/Autoloader.php");

use App\Vehicle;
use App\Person;
use App\Cloneable;
use App\Ball;
use App\Animal;
use App\Test\TestDebugInfo;
use App\Test\Other\TestSetState;

use Vendor\testClass\TestAutoload;


echo "Testing script ...\n";

//__callStatic
Vehicle::staticMethod();

//__construct
$vehicle=new Vehicle();

//__set
$vehicle->colour="green";

//__get
$vehicle->colour;

//__call
$vehicle->unknownMethod();

//__sleep
$person=new Person();
$person->setConfigArrayVal("name", "Jonas");
$person->setConfigArrayVal("surname","Jonaitis");
$configArray=serialize($person);

//__wakeup
$person=unserialize($configArray);

//__clone
$cloneableA=new Cloneable();
$cloneableB=clone $cloneableA;

//__toString
echo $cloneableA;

$animal=new Animal();

//__isset
var_dump(isset($animal->name));

//__unset
unset($animal->name);
var_dump(isset($animal->name));

//__invoke
$ball = new Ball();
$ball();

//__set_state
$testSetState = new TestSetState();
eval(var_export($testSetState, true) . ';');

//__debuginfo
$testDebugInfo = new TestDebugInfo();
var_dump($testDebugInfo);

//autoload
$testAutoload=new TestAutoload();

