<?php

require($_SERVER["DOCUMENT_ROOT"] . "/../config.php");
global $yhendus;

$kask = $yhendus->prepare("SELECT id, pealkiri, sisu FROM kassid");
$kask->execute();
$kask->bind_result($id, $pealkiri, $toon);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kassid</h1>
    <?php
    while ($kask->fetch()) {
        // You should use $pealkiri instead of $nimi
        echo "<h2 style=\"background-color: " . htmlspecialchars($toon) . "\">" . htmlspecialchars($nimi) . "</h2>";
    }
    ?>
</body>
</html>
