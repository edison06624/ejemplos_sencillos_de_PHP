<?php
echo menuFunciones();
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
            <input type="text" class="list-group-item" name="seleccion" id="seleccion" minlength="1" maxlength="1000" required>
            <button type="submit"  style="background-color: #26a69a;" name="form3">Enviar</button>
        </form>
        <br><p style="color: green;">----------------------------------------------------------------------------------------------------------------------------------------------------------------</p><br>
        <h3 style="color: orange;">Verificación de estructuras de control</h3>
    </body>
</html>

