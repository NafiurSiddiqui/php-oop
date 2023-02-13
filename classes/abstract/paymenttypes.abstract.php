<?php

    abstract class Visa {

        public function visaPayment(){
            return "Perform a payment";
        }

        abstract public function getPayment();
    }

    //* NOTES

    //1. You can not create a new object out of abstract class.
    //2. Other classes can get access to abstract classes.
    //3. extending classes MUST call the abstract methods.

    //* The use of abstraction makes it easier to develop in groups implementing certain methods. Almost like interface usecases.

?>