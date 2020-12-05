<?php

$server_name = "localhost";
$user_name = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$server_name", $user_name, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $createDb = "CREATE DATABASE IF NOT EXISTS abcsalles";
    $pdo->exec($createDb);
    echo 'DB created';
}

catch (PDOException $e) {
    echo $createDb . " " . $e->getMessage();
}