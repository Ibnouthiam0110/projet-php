<?php
function afficherTableauMultidimensionnel($tableau) {
    if (!is_array($tableau) || empty($tableau)) {
        echo "Le tableau fourni n'est pas valide.";
        return;
    }

    echo "<table border='1'>";


    echo "<tr>";
    foreach (array_keys($tableau[0]) as $cle) {
        echo "<th>$cle</th>";
    }
    echo "</tr>";

   
    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>$valeur</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}


$donnees = array(
    array('Nom' => 'Ibnou', 'Age' => 23, 'Ville' => 'DAKAR'),
    array('Nom' => 'MATY', 'Age' => 20, 'Ville' => 'THIES'),
    array('Nom' => 'LOBE', 'Age' => 22, 'Ville' => 'MBOUR')
);

afficherTableauMultidimensionnel($donnees);
?>
