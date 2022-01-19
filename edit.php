<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    //storing new user in database
    $sql = "INSERT INTO users (email,password,username)
         VALUES ('$email','$password','$username')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";

}


?>