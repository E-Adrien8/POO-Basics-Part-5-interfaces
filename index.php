<?php
require_once 'Vehicle.php';
require_once 'Bike.php';

$bike = new Bike('green', 2);

$bike-> setCurrentSpeed(10);

echo $bike ->getCurrentSpeed();