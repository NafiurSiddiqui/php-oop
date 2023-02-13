<?php

//THIS IS where you update the DB but only MODEL can interact with DB

class UsersController extends UsersModel {
    
    public function createUser($user_Name, $user_email, $user_body){
        $this->setFeedback($user_Name, $user_email, $user_body);
        
    }
}