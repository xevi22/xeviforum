<?php
session_start();

$subject = $_POST['subject'];
$body = $_POST['body'];


$post = array(
    "subject" => $subject,
    "body"=> $body,
    "author" => $_SESSION['login'][2],
    "date" => date("F j, Y , g:i a")
);

array_push($_SESSION["posts"],$post);

header('Location: ../views/panel.php');

?>