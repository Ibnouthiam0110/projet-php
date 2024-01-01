<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du Traitement</title>
</head>
<body>
    <h1>Résultat du Traitement</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $code_postal = htmlspecialchars($_POST["code_postal"]);

        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>";
        echo "<tr><td>$nom</td><td>$prenom</td><td>$adresse</td><td>$ville</td><td>$code_postal</td></tr>";
        echo "</table>";
    } else {

        echo "<p>Aucune donnée soumise.</p>";
    }
    ?>
</body>
</html>
