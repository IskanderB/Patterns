<?php
namespace Factory;
use Products\SteamGenerator\{PwrSteamGenerator, BnSteamGenerator};
use Products\Pump\{PwrPump, BnPump};
use Products\Reactor\{PwrReactor, BnReactor};
// include Products
require('products/steamGenerator.php');
require('products/pump.php');
require('products/reactor.php');

/**
 * Abstract Factory
 */
interface AbstractFactory
{
  public function createStaemGenerator($flow);
  public function createPump($flow, $head);
  public function createReactor($power);
}

/**
 * PWR Factory
 */
abstract class PwrFactory implements AbstractFactory
{
  public function createStaemGenerator($flow){
    $steam_generator = new PwrSteamGenerator($flow);
    return $steam_generator;
  }
  public function createPump($flow, $head){
    $pump = new PwrPump($flow, $head);
    return $pump;
  }
  public function createReactor($power){
    $reactor = new PwrReactor($power);
    return $reactor;
  }
}

/**
 * BN Factory
 */
abstract class BnFactory implements AbstractFactory
{
  public function createStaemGenerator($flow){
    $steam_generator = new BnSteamGenerator($flow);
    return $steam_generator;
  }
  public function createPump($flow, $head){
    $pump = new BnPump($flow, $head);
    return $pump;
  }
  public function createReactor($power){
    $reactor = new BnReactor($power);
    return $reactor;
  }
}
