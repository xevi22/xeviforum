<?php
include "functions/fun.php";
session_start();

$user = $_POST['username'] ?? null;
$pass = $_POST['pass'] ?? null;


if (isset($user) && isset($pass) && isset($_SESSION["users"])){
    if ($user === $_SESSION["users"][0]["user"] && $pass ===$_SESSION["users"][0]["pass"]){
        //=ADMIN
        $_SESSION["login"]= array(true,true,"Admin");
        header('Location: ../views/panel.php');
        
    }elseif (checkCredUser($user,$pass)!=null){
        //user
        $_SESSION["login"]= array(false,true,$user);
        header('Location: ../views/panel.php');

    }else{
        //INVALID CREDENTIALS
        header('Location: ../views/login.php');

    }
}
?>
