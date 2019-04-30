<?php
function dRestantes($n){
$fecha=mktime(0,0,0,1,$n,date('Y'));
$mes=date('F',$fecha);
$drest=365-$n;
$mesAnt=0;
$mesAct=0;
$arr=array();
    for ($i=1; $i <= $n ; $i++) { 
        array_push($arr,mktime(0,0,0,1,$i,date('Y')));
    }
    
    for ($i=0; $i < $n ; $i++) {
        $d=(int) date('d',$arr[$i]);
        

        if($i!=0){
        $mesAnt=(int) date('m',$arr[$i-1]);
        $mesAct=(int) date('m',$arr[$i]);
        }else{
            echo '<br>';
            print_r(date('F',$arr[$i]));
            echo '<br>';
        }
        if($mesAct>$mesAnt){
            echo '<br>';
            print_r(date('F',$arr[$i]));
            echo '<br>';
        }
        print_r($d);
        if($d%10==0){
            echo '<br>';
        }
        echo ' ';
       }
    
echo '<br>El mes del dia '.$n.' del anio actual es ====> '.$mes.'<br>';
if ($drest<=5) {
echo 'falta poco para que se acabe el anio';
}else{
echo 'Y faltan '.$drest.' dias para que se acabe el anio';
}
}
?>