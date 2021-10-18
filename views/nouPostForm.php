<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nou post</title>
    <link rel="stylesheet" href="css/estil3.css">
</head>
<body>
<h1>Crea el teu Post: </h1>

<form class="hola" action="../controllers/createPost.php" method="post">
    <label for="subject">subject:</label><br>
    <input type="text" id="subject" name="subject"><br><br>
    <label for="body">body:</label><br>
    <input type="text" id="body" name="body"><br><br>
    <input type="submit" value="Guarda">
</form>

</body>
</html>