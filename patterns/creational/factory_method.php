<?php
namespace Stations;
/**
 * class contains business logic for check correct data, method for calculate prefer product
 * and FACTORY METHOD to call special product creators
 */
abstract class Creator
{
  // constants for calculate prefer product
  const MAX_POWER_ATOMIC = 1200;
  const MAX_POWER_TERMAL = 300;

  // method for call factoryMethod
  public static function createStation($data)
  {
    return self::factoryMethod($data);
  }

  private static function factoryMethod($data)
  {
    // call method for check correct
    $correct = self::checkCorrect($data);
    if($correct['name'] == 'error') die("{$correct['name']} <br><br> {$correct['value']}");

    // call calculate method and call create method to special product classes
    if(self::chooseObj($data) == 'atomic'){
      return CreateAtomic::createStation($data);
    }
    else return CreateTermal::createStation($data);
  }

  // check correct data
  private static function checkCorrect($data)
  {
    //call to check correct type
    $type = self::checkType($data);
    if($type['name'] == 'error') return $type;

    //call to check correct limits
    $limit = self::checkLimits($data);
    if($limit['name'] == 'error') return $limit;

    return [
      'name' => 'success',
      'value' => 'checkCorrect',
    ];
  }
  //check correct limits
  private static function checkLimits($data)
  {
    if($data > self::MAX_POWER_ATOMIC) return [
      'name' => 'error',
      'value' => 'Incorrect data',
    ];
    return [
      'name' => 'success',
      'value' => 'checkLimits',
    ];
  }
  //check correct type
  private static function checkType($data)
  {
    if(gettype($data) != 'integer'){
      $data_int = (integer)$data;
      if(!$data_int)
      return [
        'name' => 'error',
        'value' => 'Incorrect type',
      ];
    }
    else{
      return [
        'name' => 'success',
        'value' => 'checkType',
      ];
    }
  }
  //calculate perfect product
  private static function chooseObj($data)
  {
    if($data > self::MAX_POWER_TERMAL) return 'atomic';
    else return 'termal';
  }



}

/**
 * create special Atomic objests
 */
class CreateAtomic
{
  public static function createStation($data)
  {
    $atomic = new AtomicStation($data);
    return $atomic;
  }
}

/**
 * create special Termal objests(special product creator)
 */
class CreateTermal
{
  public function createStation($data)
  {
    $termal = new TermalStation($data);
    return $termal;
  }
}

/**
 * interface for Stations(special product creator)
 */
interface StationInterface
{
  //get info about satation
  public function getName();
  // get energy from station
  public function getEnergy();
}


/**
 * Atomic Station class(special product)
 */
class AtomicStation implements StationInterface
{
  // info about product
  public $name = 'Atomic Power Station';
  public $power;

  public function __construct($power)
  {
    $this->power = $power;
  }

  // get info about product
  public function getName(){
    echo "Тип станции: {$this->name}";
    echo '<br><br>';
    echo "Номинальная мощность: {$this->power} МВт";
  }
  // get energy(basic station function)
  public function getEnergy(){
    echo 'Поток атомной энергии...';
  }
}

/**
 * Termal Station class(special product)
 */
class TermalStation implements StationInterface
{
  public $name = 'Termal Power Station';
  public $power;

  public function __construct($power)
  {
    $this->power = $power;
  }

  public function getName(){
    echo "Тип станции: {$this->name}";
    echo '<br><br>';
    echo "Номинальная мощность: {$this->power} МВт";
  }

  public function getEnergy(){
    echo 'Поток энергии химических связей...';
  }
}
