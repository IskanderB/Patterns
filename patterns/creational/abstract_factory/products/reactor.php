<?php
namespace Products\Reactor;

/**
 * Interface for reactors
 */
interface Reactor
{
  public function getInfo();
  public function getHotEnergy();
}

/**
 * Class reactor for PWR station
 */
class PwrReactor implements Reactor
{
  private $name = "Реактор ВВЭР";
  private $power;

  public function __construct($power)
  {
    $this->power = $power;
    echo "<p>Создан {$this->name} мощностью {$this->power}</p>";
  }

  public function getInfo(){
    echo "<p>Название реактора: {$this->name}</p>";
    echo "<p>Мощность реактора: {$this->power}</p>";
  }
  public function getHotEnergy(){
    echo "<p>Делю уран тепловыми нейтронами, выделяю энергию...</p>";
  }
}

/**
 * Class reactor for BN station
 */
class BnReactor implements Reactor
{
  private $name;
  private $power;

  public function __construct($power)
  {
    $this->power = $power;
    echo "<p>Создан {$this->name} мощностью {$this->power}</p>";
  }

  public function getInfo(){
    echo "<p>Название реактора: {$this->name}</p>";
    echo "<p>Мощность реактора: {$this->power}</p>";
  }
  public function getHotEnergy(){
    echo "<p>Делю уран быстрыми нейтронами, выделяю энергию...</p>";
  }
}
