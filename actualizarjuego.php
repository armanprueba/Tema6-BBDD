<?php
include_once("header.php");
?>
                <div class="row">
                    <div class="col-sm-8"><h2>Modificar <b>Juego</b></h2></div>

                </div>
            </div>
            <?php
             require_once "bbdd.php";
             $pdo=conectaDb();
             $consulta = $pdo->prepare("SELECT * FROM task where id=:id");
             $consulta->bindParam(':id', $_REQUEST['id']);

 
  $consulta->execute();
  $registro = $consulta->fetch();
      $id=$registro['id'];
      $titulo=$registro['title'];
      $descripcion=$registro['description']; 
     echo "<div class='row'><form action='editar.php' method='post'>";

     echo "<div class='col-md-6'><label>Titulo:</label>";
    echo "  <input type='text' name='titulo' id='titulo' class='form-control' maxlength='100' value=$titulo ></div>";

    echo "<div class='col-md-6'><label>Descripcion:</label>";
    echo "  <input type='text' name='descripcion' id='descripcion' class='form-control' maxlength='100' value=$descripcion ></div>";

    echo "  <input type='hidden' name='id' id='id' class='form-control' maxlength='100' value=$id >";
    echo " <div class='col-md-12 pull-right'><hr><button type='submit' class='btn btn-success'>Guardar datos</button></div></form></div>";


    
  $pdo = null;
            ?>
         
			
        </div>
    </div>     
</body>
</html>