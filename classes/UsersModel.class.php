<?php

//THIS THE MODEL , we do not show anything here.

class UsersModel extends Dbh {

    protected function getUser($user_name){
        //select soemthing form DB

        $sql = "SELECT * FROM feedback WHERE user_name = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_name]);
        
        $results = $stmt->fetchAll();

        return $results; //will use it in the view.

    }

    protected function setFeedback($user_name, $user_email, $user_body){
          //create connection for insertion
         //SET values
        $sql = "INSERT INTO feedback(user_name, user_email, user_body)VALUES (?, ?, ?) ";

        $stmt = $this->connect()->prepare($sql);
         $stmt->execute([$user_name, $user_email, $user_body]);
    }
}