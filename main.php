<?php

include_once("./classes/Shared.php");
include_once("./classes/Vehicle.php");
include_once("./classes/Person.php");
include_once("./classes/Cloneable.php");
include_once("./classes/Animal.php");
include_once("./classes/Ball.php");
include_once("./classes/test/TestSetState.php");
include_once("./classes/test/TestDebugInfo.php");

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
//var_dump($configArray);

//__wakeup
$person=unserialize($configArray);
//var_dump(unserialize($configArray));

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
//echo "\n";

//__invoke
$ball = new Ball();
$ball();

//__set_state
$testSetState = new TestSetState();
eval(var_export($testSetState, true) . ';');

//__debuginfo
$testDebugInfo = new TestDebugInfo();
var_dump($testDebugInfo);

