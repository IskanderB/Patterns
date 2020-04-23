<?php

/*
// Structular patterns
*/
require('patterns/structular/adapter/adapter.php');

/*
// Creational patterns
*/
// require('patterns/creational/factory_method/factory_method.php');
// require('patterns/creational/abstract_factory/abstract_factory.php');
// require('patterns/creational/builder/builder.php');
// require('patterns/creational/prototype/prototype.php');
// require('patterns/creational/singleton/singleton.php');



/*
// Abstract Factory
*/

/*
$PG = Factory\PwrFactory::createStaemGenerator(270);
$PG->getInfo();
$PG->getSteam();
echo "<hr>";
$Pump = Factory\PwrFactory::createPump(100, 200);
$Pump->getInfo();
$Pump->pumpFluid();
echo "<hr>";
$Reactor = Factory\PwrFactory::createReactor(1000);
$Reactor->getInfo();
$Reactor->getHotEnergy();

echo "<hr>";
echo "<hr>";
echo "<hr>";

$PG = Factory\BnFactory::createStaemGenerator(200);
$PG->getInfo();
$PG->getSteam();
echo "<hr>";
$Pump = Factory\BnFactory::createPump(70, 220);
$Pump->getInfo();
$Pump->pumpFluid();
echo "<hr>";
$Reactor = Factory\BnFactory::createReactor(800);
$Reactor->getInfo();
$Reactor->getHotEnergy();
*/

/*
// Builder
*/

// $builderPump = new Builder\PumpBuilder();
// $builderPump->getInterface();
// $builderPump->setName("A.H.Pump");
// $builderPump->setFluid("Natrium");
// $builderPump->setFlow(200);
// $builderPump->setHead(70);
// $builderPump->setType("Centrifugal");
// $builderPump->setElectricalPower(500);
// $builderPump->setPillowBlockBearingType("hydrostatic");
// $builderPump->setThrustBearingType("hydrodinamic");
// $builderPump->setClutchType("flexible");
//
// echo "<p>**********************************************************************</p>";
// $pump = $builderPump->getPump();
// $pump->getInfo();


/*
// Prototype
*/

// echo "<p style='font-weight: bold;'>Original object:";
// $pump = new Prototype\Pump('A. H. Pump', 'Water', 600);
// $pump->getInfo();
// echo "<p style='font-weight: bold;'>Cloned object:";
// $clone_pump = $pump->getClone();
// $clone_pump->getInfo();

/*
// Singletone
*/
// use Singleton\Database;
// $obj = Database::getObj('Hotel');
// $obj->getName();
//
// $other = Database::getObj('Other');
// $other->getName();

/*
// Adapter
*/

$adapter = new Adapter();

$adapter->tuning([72, 'km'], [2, 'h'], 'sm/s');
$adapter->calc();
$adapter->getResult();
?>
