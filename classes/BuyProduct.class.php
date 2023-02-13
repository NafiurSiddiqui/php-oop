<?php

class BuyProduct extends Visa {
    //We call these function 
    public function getPayment(){
        return $this->visaPayment();
    }
}
