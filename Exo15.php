
<?php
function capitaliserPremierCaractere(&$tableauDeChaines) {
    foreach ($tableauDeChaines as &$chaine) {
        $chaine = ucfirst(strtolower($chaine));
    }
    unset($chaine); 
}

$donnees = array("inFORmatIQe", "DeCemBrE", "prOJeT");
capitaliserPremierCaractere($donnees);


foreach ($donnees as $chaine) {
    echo $chaine . "\n";
}
?>
