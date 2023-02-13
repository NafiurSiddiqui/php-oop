<?php



//Interface

interface PaymentInterface {
    //Here we define what the inheriting classes need to implements
    //NAMES should be the same 
    public function payNow();
}

//We can have mulitple methods inside
//We can implement mulitple Interfaces for the classes.

interface loginInterface {
    public function login();
}


//Inheriting classes
class PayPal implements PaymentInterface, loginInterface {
    public function login()
    {
        echo "login process activates from ". self::class . ". ";
    }
    public function payNow(){
        echo ' Paying from PayPal.';
    }

   public function paymentProcess (){
    $this->login();
    $this->payNow();
   }
};
class Cash implements PaymentInterface {
     public function payNow(){
        echo ' Paying By Cash.';
    }
      public function paymentProcess (){

    $this->payNow();
   }
};

class BankTransfer implements PaymentInterface{
    public function login()
    {
        echo "login process activates from ". self::class . ". ";
    }
    public function payNow(){
        echo ' Paying from Bank.';
    }

   public function paymentProcess (){
    $this->login();
    $this->payNow();
   }
};
class MobileTransfer implements PaymentInterface {
     public function login()
    {
        echo "login process activates from ". self::class;
    }
    public function payNow(){
        echo ' Paying from Mobile.';
    }

   public function paymentProcess (){
    $this->login();
    $this->payNow();
   }
};

class Purchase  {

    public function pay( PaymentInterface $paymentType){

        $paymentType->paymentProcess();
        // 👆 calling interface runs this function.
    }

    public function onlinePay(loginInterface $paymentType){
        $paymentType->login();
    }
}

$PTYPE_PAYPAL = new PayPal;
$PTYPE_BANK = new BankTransfer;
$PTYPE_MOBILE = new MobileTransfer;
$PTYPE_CASH = new Cash;


$PURCHASE_PAYPAL = new Purchase;

$PURCHASE_PAYPAL->pay($PTYPE_PAYPAL);


