<?php
 function checkCredUser($user,$password):bool{
     foreach ($_SESSION["users"] as $usuari){
         if ($usuari["user"] ==$user) {
             if ($usuari["pass"] ===$password) {
                 return true;
             }
         }
     }
     return false;
 }

?>