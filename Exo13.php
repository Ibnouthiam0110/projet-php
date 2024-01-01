
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul TVA</title>
    <script>
        function calculerTVA() {
            
            var prixHT = parseFloat(document.getElementById("prixHT").value);
            var tauxTVA = parseFloat(document.getElementById("tauxTVA").value);

           
            if (isNaN(prixHT) || isNaN(tauxTVA)) {
                alert("Veuillez entrer des valeurs numériques valides.");
                return;
            }

            var montantTVA = prixHT * (tauxTVA / 100);
            var prixTTC = prixHT + montantTVA;

            document.getElementById("montantTVA").value = montantTVA.toFixed(2);
            document.getElementById("prixTTC").value = prixTTC.toFixed(2);
        }
    </script>
</head>
<body>

<h2>Calcul TVA</h2>

<form>
    <label for="prixHT">Prix HT :</label>
    <input type="text" id="prixHT" name="prixHT" value="<?php echo isset($_GET['prixHT']) ? htmlspecialchars($_GET['prixHT']) : ''; ?>" oninput="calculerTVA()" required><br>

    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo isset($_GET['tauxTVA']) ? htmlspecialchars($_GET['tauxTVA']) : ''; ?>" oninput="calculerTVA()" required><br>

    <label for="montantTVA">Montant TVA :</label>
    <input type="text" id="montantTVA" name="montantTVA" readonly><br>

    <label for="prixTTC">Prix TTC :</label>
    <input type="text" id="prixTTC" name="prixTTC" readonly><br>
</form>

</body>
</html>
