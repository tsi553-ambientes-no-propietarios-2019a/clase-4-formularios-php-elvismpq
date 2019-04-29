<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */

include 'php/validarRegistro.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
    <form method="post">
    <p>Nombre de Usuario: </p><br>
    <input type="text" name='txtuser' id='iduser' required><br>
    <p>Ingrese la contraseña:</p><br>
    <input type="password" name='txtpass1' id='idpass1' required><br>
    <p>Ingrese la contraseña nuevamente:</p><br>
    <input type="password" name='txtpass2' id='idpass2' required><br>
    <input type="submit" value="Registrarse"><br>
    </form>
</body>
</html>
<?php
coincidir();
?>

