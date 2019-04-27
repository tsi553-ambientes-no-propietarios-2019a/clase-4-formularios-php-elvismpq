<?php
function comprobar($user,$pass){
$log=array(
    'Pablo'=>'123',
    'Anthony'=>'456',
    'Steven'=>'789',
    'Elvis'=>'qwe',
    'Javier'=>'rty',
);
if(array_key_exists($user,$log)) {
       if ($log[$user]==$pass){
          header('Location: paginas/bienvenido.html');
       } else {
           echo "Contraseña incorrecta";
       }
    
}elseif($_SERVER['REQUEST_METHOD']=="POST"){
    echo 'Nombre de Usuario incorrecto';
}}
?>