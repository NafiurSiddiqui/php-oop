<?php

 //PARENT CLASS


 //*-- TAKE AWAY 
 /**
  * Scope operation = ::
  * Parent::<property/methods> = Accessing parent class.
  * self::<property/methods> = Accessing self class.
  */

 class Vehicle{

 

    const INDUSTRY = "Automobile";

    public static function printIndustry(){
          echo "<h3> Parent </h3>";
        echo "This is from the ". self::class . " class.  This is an " . self::INDUSTRY . " Industry.". "<br>" ;
    }
 }

 $vehicle = new Vehicle;

$vehicle::printIndustry();


class Truck extends Vehicle{

    public static $staticProperty = "Heavy duty trucks";

    //METHODS

    public static function printInfo(){

        // echo self::$staticProperty;
        echo "<h3> Child </h3>";
        echo "This " . self::class . " is from the " . parent::class . " Class";
        echo "<br>";
        echo "This class contain all the ". self::$staticProperty;

    }

}

$Nissan_titan = new Truck;

$Nissan_titan::printInfo();