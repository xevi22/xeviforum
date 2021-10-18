<?php
session_start();


if (!isset($_SESSION["users"]) || !isset($_SESSION["posts"] )){
    echo "Inicialitzant array";

    $_SESSION["users"]=array(
        array(
            "user"=>"admin",
            "pass" =>"1234"
        ),
        array(
            "user" => "xevi",
            "pass" => "12"
        )
    );

    $_SESSION["posts"]= array(
      array(
              "subject" => "Post de prova",
          "body" => "Body Test",
          "author"=> "admin",
          "date"=> date("F j, Y , g:i a")
      )
    );
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form class="di" action="../controllers/checkLogin.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Pass:</label><br>
        <input type="password" id="password" name="pass"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>