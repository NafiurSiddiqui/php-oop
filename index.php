<?php
    include './includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP </title>
</head>
<body>
  
<!-- Visibility and Inheritence -->
<?php


    //  $synth1 = new Synthesizer();
    //  $per1 = new Visibility();
    //  //WE CAN ALSO Create object like this.
    //  $newVisibility = 'Visibility';

    //  echo $synth1->owner();
    // //  echo $per1->owner();

    // //*ACCESSING STATIC METHOD AND PROPS

    // // Visibility::staticMethod();
    // // echo Visibility::$staticDream;

    
    // $newVisibility::staticMethod();

  


?>

<!-- CONSTRUCTOR -->

<?php

  $user1 = new User\User('Eddie',' ed@gmail.com', 12345);

//   var_dump($user1);

echo $user1->name;
//   echo $user1->email;
//   echo $user1->showPassword();


//* DELETING A CLASS

unset($user1); //DELETES user1 OBJ

// echo $user1->name;  //USER1 does not exist anymore

$user2 = new User\User(' Levin', 'lvin@gma.com', 8943); //WE CAN STILL CREATE MORE USER.

echo $user2->name;

?>
</body>
</html>