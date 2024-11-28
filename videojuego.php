<?php
    include_once("bbdd.php");
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Ejcookies</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="videojuegos.css"> 
    </head> 
<body> 
    <form name="login" method="POST" action="videojuegoConexion.php"> 
    <div class="mb-3"> 
    <label for="exampleFormControlInput1" class="form-label">Título:</label> 
    <input type="text" name="titulo" class="form-control" placeholder="Introduzca el nombre de su usuario" aria-label="Introduzca su nombre de usuario"> 
    </div> 
    <div class="mb-3"> 
    <label for="exampleFormControlInput1" class="form-label">Descripción:</label> 
    <input type="text" name="descripcion" class="form-control" placeholder="Introduzca el nombre de su usuario" aria-label="Introduzca su nombre de usuario"> 
    </div> 
    <input type="submit" name="submit" id="submit" value="Subir">  
    </form> 
    <?php
        include "videojuegoConexion.php"
    ?>

</body> 
</html> 