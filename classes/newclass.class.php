<?php

//* Names class
class NewClass{

    //properties and methods
    public $info = "Some info";


}


$object = new NewClass;

// var_dump($object);


//* Anonymous class
//useful for when you need to use a class only one place in the site. 
//Doing this will not store the object in memory and delete that afterwards


$newObj = new class() {

    public function printSomething(){
        echo " Printing out anonymously.";
    }
};


