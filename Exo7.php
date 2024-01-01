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
    $nombre = 7 ; 
    $somme = 0 ;
    for ($i=1 ; $i<$nombre ; $i++) {
        if ($nombre % $i == 0) {
            $somme = $somme + $i ; 
        } 
    }
    if ($somme == $nombre ) {
        echo ("Le nombre $nombre est parfait " ) ;
     
    }

    else {
        echo ("Le nombre $nombre n'est pas parfait ") ; 
    }
    
    ?>
</body>
</html>