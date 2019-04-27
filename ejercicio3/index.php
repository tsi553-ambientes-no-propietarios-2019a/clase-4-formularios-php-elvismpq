<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */
include 'php/control.php';
$u='';
$p='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Formulario</title>
</head>
<body>
   <form method='POST'>
      <p>Ususario: </p>
      <input type="text" name="txtuser" id="iduser" required><br>
      <p>Contraseña:</p>
      <input type="password"name="txtpass" id="idpass" required><br>
      <input type="submit" value="Ingresar">
   </form>
   <?php
   
   
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $u=$_POST['txtuser'];
      $p=$_POST['txtpass'];
      
   }
   comprobar($u,$p);
   ?>
</body>
</html>