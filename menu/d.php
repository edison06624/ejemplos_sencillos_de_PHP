<?php
echo menuCadenas();
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

        <form action="funciones.php" method="POST">
            
            <textarea id="seleccion" name="seleccion" placeholder="Ingrese el texto aqui" minlength="1" maxlength="1000" required></textarea>
            <button type="submit"  style="background-color: #26a69a;" name="form5">Enviar</button>
        </form>
        <br><p style="color: green;">----------------------------------------------------------------------------------------------------------------------------------------------------------------</p><br>
        <h3 style="color: orange;">Verificación de estructuras de control</h3>
    </body>
</html>