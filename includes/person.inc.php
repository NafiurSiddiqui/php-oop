<?php


//INHERITENCE AND VISIBILITY

class Person {

    //START BY private and then change based on the careful requirement
    // private $first = "Klaus"; //Can't access from anywhere but this class.
    // public $first = "Klaus"; //global access
    protected $first = "Klaus"; //Access within this class and others
    private $last = "Schulze";
    private $age = 70;

    
    //  public function owner(){

    //     // $this->printSomething();
    //     // THIS WAY WE CAN STILL ACCESS THE PRIVATE METHODS or PROPERTIES
        
    //     $myOwner = $this->first;
    //     return $myOwner;
    // }

    //Making function private will only be accessible from the class itself unless you return it.

    private function printSomething(){

        echo ' This is a private method! ';
    }

  
};

class Synthesizer extends Person {
     
    public function owner(){
        
        $myOwner = $this->first;
        return $myOwner;
    }
}