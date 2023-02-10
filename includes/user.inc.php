<!-- CONSTRUCTOR -->

<!-- CREATE USER using their information -->

<?php

class User {

    public $name;
    public $email;
    private $password;
    
    public function __construct($name,$email,$password )
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    public function showPassword(){
        //NEVER DO THIS IRL unless there is a specific case
        echo $this->password;
    }

    /**
     * @destruct() - It runs anytime class is instantiated.
     */
    public function __destruct()
    {
        echo ' User created!';
    }

}

?>