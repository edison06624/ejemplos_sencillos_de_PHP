<?php
include("funciones/funciones.php");
echo menuSelectivas();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Desarrollo web avanzado</title>
    </head>
    <body>
        
        <form action="funciones/funciones.php" method="POST">
            <input type="text" class="list-group-item" name="seleccion" id="seleccion" minlength="1" maxlength="1" onkeypress="return (event.charCode >= 97 && event.charCode <= 100)" required>
            <button type="submit"  style="background-color: #26a69a;" name="form1">Enviar</button>
        </form>
    </body>
</html>
