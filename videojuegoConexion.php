
<?php 
include_once("bbdd.php");

    if(isset($_POST['submit']) && $_POST['submit'] == "Subir"){
        if(isset($_POST["titulo"]) || isset($_POST["descripcion"])) { 
            $titulo = $_POST["titulo"]; 
            $descripcion = $_POST["descripcion"]; 
            if (!empty($titulo) && !empty($descripcion)) {
                try {
                    $consulta = "INSERT INTO task (title, description) VALUES (:titulo, :descripcion)";
                    $insercion = $pdo->prepare($consulta);
                    $insercion->bindParam(':titulo', $titulo, PDO::PARAM_STR);
                    $insercion->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                    $insercion->execute();
                    header("Location: videojuego.php");
                    exit;
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
        }
    }

