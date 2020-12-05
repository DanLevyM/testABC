<?php

try {
    $pdo = new PDO("mysql:dbname=abcsalles;host=localhost", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlTruncate = "DROP TABLE ref_prenoms";
    $pdo->exec($sqlTruncate);

    $sqlCreateTable = "CREATE TABLE ref_prenoms (
        id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        label VARCHAR(100) NOT NULL,
        `type` TINYINT NOT NULL,
        genre TINYINT NOT NULL,
        origin VARCHAR(100)
        )";

        $pdo->exec($sqlCreateTable);
        echo "requete ok";
}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

