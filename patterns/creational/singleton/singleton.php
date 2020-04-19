<?php
namespace Singleton;
/**
 *
 */
class Database
{
  private $name;
  private static $obj;

  public static function getObj($name = 'Laravel_db')
  {
    if(self::$obj == null){
      self::$obj = new Database($name);
      return self::$obj;
    }
    else{
      return self::$obj;
    }
  }

  public function getName()
  {
    echo "<p><span style='font-weight:bold;'>Database name: </span>{$this->name}</p>";
  }

  private function __construct($name)
  {
    $this->name = $name;
    echo "<p>New obj</p>";
  }
}
