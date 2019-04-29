
<?php function coincidir(){
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $p1=$_POST['txtpass1'];
      $p2=$_POST['txtpass2'];
     if($p1==$p2){
         header('Location: php/registroCorrecto.php');
    }else{
        echo 'Las contraseñas no coinciden';
    }
   }
    
}
?>