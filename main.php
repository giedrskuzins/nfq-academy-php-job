<?php

include_once("./classes/Shared.php");
include_once("./classes/Vehicle.php");
include_once("./classes/Person.php");
include_once("./classes/Cloneable.php");

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

