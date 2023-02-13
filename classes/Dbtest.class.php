<?php

 class DbTest extends Dbh {

    //We can use our custom function without prepared statements (e.g. user inputs)

    public function getFeedback(){

        //create connection
        $sql = "SELECT * FROM feedback";
        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()){
            //usually you want to set parameters like attributes inside fetch. But since we already defined the attributes inside Dbh we do not need to define them here.
            echo $row['user_body'] . '<br>';

        }
    }

    //NOW we use prepared statement for data submission from users.

    public function getUser($user_name, $user_email){

        //create connection
        $sql = "SELECT * FROM feedback WHERE user_name = ? AND user_email= ? ";

        //preparing actual sql without user input

        $stmt = $this->connect()->prepare($sql);

        //fill the blanks inside sql

        $stmt->execute([$user_name, $user_email]);

        $userNames = $stmt->fetchAll(); 

        foreach($userNames as $userName){

             echo "User: ". $userName['user_name'] . '<br>';
        }

        
    }

    //Setting user input
     public function setUser($user_name, $user_email, $user_body){

         //create connection for insertion
         //SET values
        $sql = "INSERT INTO feedback(user_name, user_email, user_body)VALUES (?, ?, ?) ";

        $stmt = $this->connect()->prepare($sql);
         $stmt->execute([$user_name, $user_email, $user_body]);
        
    }

    

 }