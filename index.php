<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP </title>
</head>
<body>
    
<?php
     include './includes/person.inc.php';

     $synth1 = new Synthesizer();
     $per1 = new Person();

     echo $synth1->owner();
     echo $per1->owner();


?>
</body>
</html>