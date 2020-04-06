<?php

require('patterns/creational/factory_method.php');


$station = Stations\Creator::createStation(300);
$station->getName();
echo "<br><br>";
$station->getEnergy();

?>
