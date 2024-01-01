<?php
$nombreInitial = 998; 
$tirages = 0;

while (true) {
    $tirageAleatoire = rand(100, 999);
    $tirages++;

    if ($tirageAleatoire === $nombreInitial) {
        break;
    }
}

echo "Nombre initial : $nombreInitial\n";
echo "Nombre de tirages nécessaires avec while : $tirages\n";
?>
<br> <br> <br> <br> <br>

<?php
$nombreInitial = 666;
$tirages = 0;

for (; ;) {
    $tirageAleatoire = rand(100, 999);
    $tirages++;

    if ($tirageAleatoire === $nombreInitial) {
        break;
    }
}

echo "Nombre initial : $nombreInitial\n";
echo "Nombre de tirages nécessaires avec for : $tirages\n";
?>
