<?php

require_once "bbdd.php";
$pdo=conectaDb();
echo $_REQUEST['titulo'];
$insercion = $pdo->prepare("delete from task where id=:id");
$insercion->bindParam(':id', $_REQUEST['id']);

if(!$insercion->execute()) 
echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";

$pdo = null;
header("Location:videojuego.php");

echo '<p>En breve le redirigiremos al listado.</p>';