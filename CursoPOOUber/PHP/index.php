<?php

require_once('Car.php');
require_once('Account.php');
require_once('uberX.php');
require_once('uberVan.php');
// $car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
// $car->printDataCar();
$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();