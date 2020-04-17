<?php

namespace Prototype;

/**
 *
 */
interface Prototype
{
  public function getClone();
}

/**
 * Class of object pump
 */
class Pump implements Prototype
{
  private $name;
  private $fluid;
  private $flow;

  function __construct($name, $fluid, $flow)
  {
    $this->name = $name;
    $this->fluid = $fluid;
    $this->flow = $flow;
  }

  public function getInfo()
  {
    echo "<p style='text-decoration: underline'>Info about the pump:</p>";
    echo "<p>Name: {$this->name}</p>";
    echo "<p>Fluid: {$this->fluid}</p>";
    echo "<p>Flow: {$this->flow}</p>";
  }

  public function getClone()
  {
    return new Pump($this->name, $this->fluid, $this->flow);
  }
}
