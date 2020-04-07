<?php
namespace Products\Pump;

/**
 * Interface for pumps
 */
interface Pump
{
  public function getInfo();
  public function pumpFluid();
}

/**
 * Class pump for PWR station
 */
class PwrPump implements Pump
{
  private $name = "Водяной насос";
  private $flow;
  private $head;

  public function __construct($flow, $head)
  {
    $this->flow = $flow;
    $this->head = $head;
    echo "<p> Создан {$this->name} с расходом {$this->flow} и напором {$this->head}</p>";
  }

  public function getInfo(){
    echo "<p>Название насоса: {$this->$name}</p>";
    echo "<p>Расход насоса: {$this->flow}</p>";
    echo "<p>Напор насоса: {$this->head}</p>";
  }
  public function pumpFluid(){
    echo "<p>Качаю воду...</p>";
  }
}

/**
 * Class pump for BN station
 */
class BnPump implements Pump
{
  private $name = "Натриевый насос";
  private $flow;
  private $head;

  public function __construct($flow, $head)
  {
    $this->flow = $flow;
    $this->head = $head;
    echo "<p> Создан {$this->name} с расходом {$this->flow} и напором {$this->head}</p>";
  }

  public function getInfo(){
    echo "<p>Название насоса: {$this->$name}</p>";
    echo "<p>Расход насоса: {$this->flow}</p>";
    echo "<p>Напор насоса: {$this->head}</p>";
  }
  public function pumpFluid(){
    echo "<p>Качаю натрий...</p>";
  }
}
