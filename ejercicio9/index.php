<?php
/*
- Escribir una página en PHP que presente un calendario del mes actual.
- Utlizar HTML y CSS para darle color y estilo al calendario. El día actual debe ser resaltado en negrita y con la celda de diferente color.
- Pista: utilizar la función date(). Entre otros parámetros la función date puede recibir: ‘Y’, ‘m’, ‘d’, ‘N’. Investigar sobre la función date si es necesario utilizar otros parámetros (http://php.net/manual/es/function.date.php).
- Pista: Utilizar tablas HTML para presentar el calendario.
*/
$mes= date('F');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table table-bordered">
  
  <?php
  
  if ($mes=='January' or $mes=='May'or $mes=='September') {
      echo '<thead class="thead-dark">';
  } elseif($mes=='February' or $mes=='June'or $mes=='October') {
    echo '<thead class="thead-success">';
  }elseif ($mes=='March' or $mes=='July'or $mes=='November') {
    echo '<thead class="thead-warning">';
  }elseif ($mes=='April' or $mes=='August'or $mes=='December') {
    echo '<thead class="thead-info">';
  }
  
  ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col" colspan="7"><h1 class="text-center"><?php echo $mes;?></h1></th>
    </tr>
  </thead>
  
  <tbody>
  <tr class="table-active">
      <td>Mon</td>
      <td>Tue</td>
      <td>Wed</td>
      <td>Thu</td>
      <td>Fri</td>
      <td>Sat</td>
      <td>Sun</td>
    </tr>
    <?php
    $m=(int) date('m');
    $d=(int) date('d',mktime(0,0,0,$m+1,0,date('y')));
    echo '<tr >';
    for ($i=1; $i <= $d; $i++) { 
        echo '<td>'.$i.'</td>';
        if($i%7==0){
            echo '</tr> <tr>';
        }elseif($d==$i){
            echo '</tr>';
        }
    }
    ?>
    <tr>

    </tr>
  </tbody>
</table>
</div>
</body>
</html>
