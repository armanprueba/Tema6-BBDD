
<?php 
include_once("bbdd.php");


    if(isset($_POST['submit']) && $_POST['submit'] == "Subir"){
        if(isset($_POST["titulo"]) || isset($_POST["descripcion"])) { 
            $titulo = $_POST["titulo"]; 
            $descripcion = $_POST["descripcion"]; 
        }
    }


$consulta = "INSERT INTO task(title, description)" ." VALUES(:titulo, :descripcion)"; 
$insercion = $pdo->prepare($consulta); 
$insercion->bindParam (':titulo', $titulo, PDO::PARAM_STR); 
$insercion->bindParam (':descripcion', $descripcion, PDO::PARAM_STR); 
$insercion->execute();

$consulta = $pdo->query("SELECT * FROM task");
$consulta->execute();
while($registro = $consulta->fetch())
{
echo $registro['description']."<br>";
}
