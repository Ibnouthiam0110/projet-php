<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tableau Exercice 8</p>
<?php
    $tab=array("THIAM"=>array("Ibnou","Dakar",23),"SOW"=>array("Awa","Lac Rose",20),"FALL"=>array("Latyf","Thies",27));
    foreach($tab as $cle=>$valeur)
    {
    echo " Elément $cle : ";
    foreach($valeur as $der=>$val)
    {
    echo "elément $der : ", $val,  "  " ; }
    }
    ?>
    <br> <br> <br> <br>
 <p>Tableau Exercice 9 </p>
    <?php
    $tab=array("COLY"=>array("prenom"=>"Seynabou","ville"=>"Dakar","age"=>57),"THIAM"=>array("prenom"=>"Madiakhou","ville"=>"THIES","age"=>62),
    "Goudiaby"=>array("prenom"=>"Djiby","ville"=>"Dakar","age"=>63));
    foreach ($tab as $cle=>$valeur) {
        echo " $cle : " ; 
        foreach ($valeur as $cle2=>$val) {
            echo " $cle2 :" , $val , " " ; 
        }
    }
    ?>