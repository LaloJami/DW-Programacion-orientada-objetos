<?php

require_once('Car.php');
require_once('Account.php');
require_once('uberX.php');
require_once('uberPool.php');
// $car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
// $car->printDataCar();
$uberX = new UberX('CVB123', new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool('CVB123', new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
$uberPool->printDataCar();