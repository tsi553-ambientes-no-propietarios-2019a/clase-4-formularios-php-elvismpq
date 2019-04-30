<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <form method="post">
    <p>Ingrese un numero de 1 al 365: </p>
    <input type="text" name='txtnum' id='idnum'>
    <input type="submit" value="Ingresar">
    </form>
</body>
</html>
<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/
include 'php/control.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){
$num=$_POST['txtnum'];
dRestantes($num);
}
?>