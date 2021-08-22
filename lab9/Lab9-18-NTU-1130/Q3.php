<?php
function  maxi($num1,$num2){
    if($num1>$num2){
        return $num1;
    }
    else{
        return $num2;
    }
}
$num1=340;
$num2=560;
$result= maxi($num1,$num2);
echo "Max is ".$result;

 ?>