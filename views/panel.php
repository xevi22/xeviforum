<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estil.css">
    <title>Document</title>
</head>
<body class="uep">

<div class="top">
    <div class="topleft">
        <span class="titol">Formulari Cirvianum</span>
    </div>
    <div class="topright">
        <a href="">Llistat</a>
        <?php
        if ($_SESSION["login"][1]){
                echo "<a href='nouPostForm.php'>Nou Post</a>";
            }
        ?>

        <?php
        if ($_SESSION["login"][0] && $_SESSION["login"][1]){
            echo "<a href='registre.php'>Registre Usuari</a>";
        }
        ?>

        <?php
        if ($_SESSION["login"][2]==null){
            echo "<a class='user' href='login.php'>LogIn</a>";
        }else{
            echo "<a class='user' href=''>".$_SESSION['login'][2] . "</a>";
        }
        ?>

    </div>
</div>
    <?php
    foreach ($_SESSION["posts"] as $post){
        echo "<div class='contingut'>";

            echo "<div class='post'>";
            echo "<h2>" .$post["subject"] . "</h2>";
            echo "<h3>" .$post["body"] . "</h3>";
            echo "<h3>" .$post["author"] . "</h3>";
            echo "<h3>" .$post["date"] . "</h3>";
            echo "</div>";
        echo "</div>";
        }

    ?>

</body>
</html>
