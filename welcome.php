<?php
session_start();
include "dp.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    


     
    echo "welcome " .$_SESSION['username']. "<br>";
 

    // foreach($_SESSION['user'] as $key => $val){
    //     print_r($val[$key]['email']);
        
    //     }
    // echo "Your Email:" .$x[0].['email']. ;
    // echo "$x[0]['email']";
    ?>

</body>
</html>