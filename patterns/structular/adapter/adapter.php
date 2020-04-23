<?php

/*
***Task***

Calculate SPEED if
DISTANCE: S = first value (meters);
TIME: t = second value (seconds).
*/

/**
 * Common interface for CalcSpeed and Adapter
 */
interface Calc
{
  public function calc();
  public function getResult();
}

/**
 * Class for calculating SPEED
 */
class CalcSpeed implements Calc
{
  private $S;
  private $t;
  private $V;

  function __construct($S, $t)
  {
    $this->S = $S;
    $this->t = $t;
  }

  public function calc()
  {
    $this->V = round($this->S/$this->t,3);
  }

  public function getResult()
  {
    return $this->V;
  }

  // public function getResult()
  // {
  //   echo "<p>If DISTANCE: {$this->S} (m)</p>";
  //   echo "<p>TIME: {$this->t} (s)</p>";
  //   echo "<p>then SPEED: {$this->V} (m/s)</p>";
  // }
}

/**
 * Adapter for CalcSpeed
 */
class Adapter implements Calc
{
  private $S_coefficients = [
    'ml' => 1.61*10**(3),
    'km' => 10**(3),
    'm' => 1,
    'sm' => 10**(-2),
    'mm' => 10**(-3),
    'mkm' => 10**(-6),
    'nm' => 10**(-9),
    'pm' => 10**(-12),
  ];
  private $t_coefficients = [
    'y' => 365*24*60*60,
    'd' => 24*60*60,
    'h' => 60*60,
    'm' => 60,
    's' => 1,
    'ms' => 10**(-3),
  ];
  private $V_coefficients = [
    'km/h' => 3.6,
    'km/d' => 3.6*24,
    'km/y' => 3.6*24*365,
    'm/s' => 1,
    'ml/h' => 3.6*1.61,
    'km/s' => 10**(-3),
    'sm/s' => 10**(2),
    'mm/s' => 10**(3),
  ];
  private $calc;
  private $typeV;
  private $typeS;
  private $type_t;
  private $distance;
  private $time;


  function __construct()
  {
    echo "<p style='font-weight:bold;'>DIRECTION</p>";
    echo '<pre>For tuning calculator to your data you should call method tuning([distance, type of distance], [time, type of tiem], type of speed)</pre>';
    echo "<pre>Example: tuning([100, 'km'], [3000, 's'], 'm/s')</pre>";
    echo "<pre>The next call method calc()</pre>";
    echo "<pre>And finally call method getResult()</pre>";
    echo "<p style='font-weight:bold;'>Avalible types of speed:</p>";
    foreach (array_keys($this->V_coefficients) as $key => $value) {
      echo "<pre>{$value}</pre>";
    }
  }

  public function tuning($S, $t, $V)
  {
    if (isset($this->S_coefficients[$S[1]]) or isset($this->t_coefficients[$t[1]]) or isset($this->V_coefficients[$V])) {
      $distance = $this->S_coefficients[$S[1]]*$S[0];
      $time = $this->t_coefficients[$t[1]]*$t[0];
      $this->calc = new CalcSpeed($distance, $time);
      $this->typeV = $V;
      $this->distance = $S[0];
      $this->time = $t[0];
      $this->tepeS = $S[1];
      $this->tepe_t = $t[1];
    }
    else{
      die("<p>Not correct types of data!</p>");
    }
  }

  public function calc()
  {
    $this->calc->calc();
  }

  public function getResult()
  {
    echo "<p>If DISTANCE: {$this->distance} ({$this->tepeS})</p>";
    echo "<p>TIME: {$this->time} ({$this->tepe_t})</p>";
    $speed = $this->calc->getResult() * $this->V_coefficients[$this->typeV];
    echo "<p>then SPEED: {$speed} ({$this->typeV})</p>";
  }
}
