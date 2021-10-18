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
    <link rel="stylesheet" href="css/estil2.css">
    <title>Registre Usuaris</title>
</head>
<body>

<form class="login-form" action="../controllers/registreUsuari.php" method="post">
    <p class="login-text">
    <span class="imgPerfil">
      <img src="../img/perfil.png">
    </span>
    </p>
    <input type="text" id="newUser" name="newUser" class="login-username" autofocus="true" required="true" placeholder="Username" />
    <input type="password" id="newPass" name="newPass" class="login-password" required="true" placeholder="Password" />
    <input type="submit" name="Login" value="Submit" class="login-submit" />
</form>
</body>
</html>