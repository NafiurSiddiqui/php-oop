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
    
?>