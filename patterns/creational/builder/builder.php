<?php
namespace Builder;
/**
 * Class of object pump
 */
class Pump
{
  public $name;
  public $fluid;
  public $flow;
  public $head;
  public $type;
  public $power_el;
  public $pillow_block_bearing;
  public $thrust_bearing;
  public $clutch;

  public function getInfo()
  {
    echo "<p>Info about the pump:</p>";
    echo "<p>Name: {$this->name}</p>";
    echo "<p>Fluid: {$this->fluid}</p>";
    echo "<p>Flow: {$this->flow}</p>";
    echo "<p>Head: {$this->head}</p>";
    echo "<p>Type: {$this->type}</p>";
    echo "<p>Electrical power: {$this->power_el}</p>";
    echo "<p>Type of pillow block bearing: {$this->pillow_block_bearing}</p>";
    echo "<p>Type of thrust_bearing: {$this->thrust_bearing}</p>";
    echo "<p>Type of clutch: {$this->clutch}</p>";
  }
}

/**
 * Builder interface
 */
interface Builder
{
  public function setName($data);
  public function setFluid($data);
  public function setFlow($data);
  public function setHead($data);
  public function setType($data);
  public function setElectricalPower($data);
  public function setPillowBlockBearingType($data);
  public function setThrustBearingType($data);
  public function setClutchType($data);
  public function getPump();
  public function getInterface();
}

/**
 *
 */
class PumpBuilder implements Builder
{
  private $pump;

  function __construct(){
    $this->pump = new Pump();
  }
  public function getInterface()
  {
    echo "<p>Methods:</p>";
    foreach (get_class_methods($this) as $key => $value) {
      echo "<p>$key: $value</p>";
    }
  }
  public function setName($data)
  {
    $this->pump->name = $data;
  }
  public function setFluid($data)
  {
    $this->pump->fluid = $data;
  }
  public function setFlow($data)
  {
    $this->pump->flow = $data;
  }
  public function setHead($data)
  {
    $this->pump->head = $data;
  }
  public function setType($data)
  {
    $this->pump->type = $data;
  }
  public function setElectricalPower($data)
  {
    $this->pump->power_el = $data;
  }
  public function setPillowBlockBearingType($data)
  {
    $this->pump->pillow_block_bearing = $data;
  }
  public function setThrustBearingType($data)
  {
    $this->pump->thrust_bearing = $data;
  }
  public function setClutchType($data)
  {
    $this->pump->clutch = $data;
  }
  public function getPump()
  {
    return $this->pump;
  }
}
