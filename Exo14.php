<?php

$action = isset($_POST['action']) ? $_POST['action'] : '';


if ($action === 'Vendre') {
    header("Location: Vendre.php");
    exit();
} elseif ($action === 'Acheter') {
    header("Location: acheter.php");
    exit();
} elseif ($action === 'Louer') {
    header("Location: louer.php");
    exit();
} else {

    header("Location: page_par_defaut.php");
    exit();
}
?>
