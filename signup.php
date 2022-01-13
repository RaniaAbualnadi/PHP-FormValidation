<?php 
session_start();
$data = $_POST;

if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
        $_SESSION['messages'][]= "Please fill all required fields!";
        header("Location: register.php");
        exit;
}

if ($data['password'] !== $data['password_confirm']) {
    $_SESSION['messages'][]= "Password and Confirm password should match!";
    header("Location: register.php");
    exit;
};