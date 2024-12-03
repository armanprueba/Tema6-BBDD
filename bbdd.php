<?php
function conectaDb() {
    $host = "localhost";
    $nombreBD = "phpVideojuego";
    $usuario = "root";
    $password = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8", $usuario, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "<p class=\"alert alert-danger\">Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>";
        exit;
    }
}
?>
