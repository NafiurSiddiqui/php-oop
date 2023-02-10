<?php


//*INHERITENCE AND VISIBILITY

/**
 * PRIVATE - Can't access from anywhere but this class.
 * PUBLIC - Global access
 * PROTECTED - Access within class and instances
 * Static - Static can be accessed without initiating class.
 * Readony - We can not assign any value or anything.
 */

class Person {

    //START BY private and then change based on the careful requirement
    // private $first = "Klaus"; //Can't access from anywhere but this class.
    // public $first = "Klaus"; //global access
    protected $first = "Klaus"; //Access within this class and others
    private $last = "Schulze";
    private $age = 70;
    public static $staticDream = ' This is a Static property ';
    // public readonly string $prop;
    
     public function owner(){

        // $this->printSomething();
        // THIS WAY WE CAN STILL ACCESS THE PRIVATE METHODS or PROPERTIES
        
        $myOwner = $this->first;
        return $myOwner;
    }

    //Making function private will only be accessible from the class itself unless you return it.

    private function printSomething(){

        echo ' This is a private method! ';
    }

    //STATIC

    public static function staticMethod(){
        echo " This is a static method. ";
    }

    /**
     *  STATIC methods/properties are accessed using the SCOPE RESOLUTION OPERATOR (::)
     * Check out index.php
     */


  
};



class Synthesizer extends Person {
     
    public function owner(){
        
        $myOwner = $this->first;
        return $myOwner;
    }
}