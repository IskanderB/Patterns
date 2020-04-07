<?php
namespace Products\SteamGenerator;

/**
 * Interface for steam generators
 */
interface SteamGenerator
{
  public function getInfo();
  public function getSteam();
}

/**
 * Class steam generator for PWR station
 */
class PwrSteamGenerator implements SteamGenerator
{
  private $name = "Пароденератор для ВВЭР";
  private $flow;

  public function __construct($flow)
  {
    $this->flow = $flow;
    echo "<p>Создан {$this->name} с паропроизводительностью {$this->flow}</p>";
  }

  public function getInfo(){
    echo "<p>Название парогенератора: {$this->name}</p>";
    echo "<p>Паропроизводительность парогенератора: {$this->flow}</p>";
  }
  public function getSteam(){
    echo "<p>Грею воду, испаряю воду, вырабатываю пар...</p>";
  }
}

/**
 * Class steam generator for BN station
 */
class BnSteamGenerator implements SteamGenerator
{
  private $name = "Парогенератор для БН";
  private $flow;

  public function __construct($flow)
  {
    $this->flow = $flow;
    echo "<p>Создан {$this->name} с паропроизводительностью {$this->flow}</p>";
  }

  public function getInfo(){
    echo "<p>Название парогенератора: {$this->name}</p>";
    echo "<p>Паропроизводительность парогенератора: {$this->flow}</p>";
  }
  public function getSteam(){
    echo "<p>Грею воду, испаряю воду, вырабатываю пар...</p>";
  }
}
