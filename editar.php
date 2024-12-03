<?php

require_once "bbdd.php";
$pdo=conectaDb();

$insercion = $pdo->prepare("update task set title=:titulo, description=:descripcion where id=:id");
$insercion->bindParam(':id', $_REQUEST['id']);
$insercion->bindParam(':titulo', $_REQUEST['titulo']);
$insercion->bindParam(':descripcion', $_REQUEST['descripcion']);

if(!$insercion->execute()) 
echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";

$pdo = null;
header("Refresh:1; url=videojuego.php");
echo '<p>En breve le redirigiremos al listado.</p>';

exit;