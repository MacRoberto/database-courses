<?php

if(!isset($_POST) || empty($_POST)){
    header("Location: ../");
    return false;
}

if($_POST['email-login'] == "" || $_POST['password-login'] == "") {
    header("Location: ../");
    return false;
} 

$emailLogin = $_POST['email-login'];
$passwordLogin = $_POST['password-login'];

require_once 'connection.php';
$query = "SELECT * FROM users WHERE email = '$emailLogin' AND password = '$passwordLogin'";
$conexion ->query($query);
$result = $conexion ->query($query);
print_r($result);

if($result -> num_rows == 0){
    header("Location: ../");
    return false;
}

$user = $result -> fetch_object();
session_start(); //$_SESSION

$_SESSION['email'] = $emailLogin;
$_SESSION['name'] = $user->name;

header("Location: ../modules/users/");

?>