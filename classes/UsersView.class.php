<?php

class UsersView extends UsersModel {
  
    public function showUser($name){
        $results = $this->getUser($name);
        
        echo "User: " . $results[0]['user_name'];
    }
}