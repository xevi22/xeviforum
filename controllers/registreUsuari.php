<?php
include "functions/fun.php";
session_start();

$user = $_POST['newUser'];
$pass = $_POST['newPass'];

$user = array(
    "user" => $user,
    "pass"=> $pass,
);

array_push($_SESSION["users"],$user);

header('Location: ../views/login.php');

?>

