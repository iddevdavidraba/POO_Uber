<?php
require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Account.php");

$uberX = new UberX("QWE123", new Account("David Raba", "AN927126"), "Chevrolet", "Camaro");
$uberX->printDataCar();
