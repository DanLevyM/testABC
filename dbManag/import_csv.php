<?php
require_once "../functions/functions.php";

try {
    $pdo = new PDO("mysql:dbname=abcsalles;host=localhost", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if (($handle = fopen('../csv/prenoms.csv', 'r')) !== FALSE) {
    $data = fgetcsv($handle, 50, ';');
    while (($data = fgetcsv($handle, 50, ';')) !== FALSE) {
        $num = count($data);
        $label = $data[0];
        $origin = $data[2];
        $genre = checkGenre($data[1]);
        $type = checkType($data[1]);
        
        try {
            $addEntity = "INSERT INTO ref_prenoms (label, `type`, genre, origin) VALUES ('$label', $type, $genre, '$origin')";
            $pdo->exec($addEntity);
        }
        catch (PDOException $e) {
            echo "Erreur lors de l'ajout du champs csv" . $e->getMessage();
        }
    }
    fclose($handle);
}



