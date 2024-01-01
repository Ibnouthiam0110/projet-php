<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function ppcm($a,$b){

    $res = $a * $b;
    while($a > 1){
        $r = $a % $b;
    if($r == 0 ){
      $result = $res / $b;
        break;  
             }
             $a = $b;
             $b = $r;
        
    }
     return $result; 
}
?> 
<?php
    echo ("le PPCM des deux nombres est ") ; 
  echo ppcm( 120,420 );
?>