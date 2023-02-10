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
    //  include './includes/visibility.inc.php';

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
  include './includes/user.inc.php';

  $user1 = new User('Eddie',' ed@gmail.com', 12345);

//   var_dump($user1);

// echo $user1->name;
//   echo $user1->email;
//   echo $user1->showPassword();
?>
</body>
</html>