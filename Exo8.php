<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$personnes = array(
    'THIAM' => array('prenom' => 'Ibnou', 'ville' => 'Dakar', 'age' => 23), 
    'SOW' => array('prenom' => 'Awa', 'ville' => 'Lac Rose', 'age' => 20),
    'FALL' => array('prenom' => 'Latyf', 'ville' => 'Thies', 'age' => 27),
    
);



foreach ($personnes as $nom => $infos) {
    echo "Nom : $nom, Prénom : " . $infos['prenom'] . ", Ville : " . $infos['ville'] . ", Âge : " . $infos['age'] . "\n";
}
?>



</body>
</html>