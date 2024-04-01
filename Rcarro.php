<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Vehiculo</title>
</head>
<body>

<div class="row mt-3">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="controladores/controladorCar.php" method="POST">
                <h3 class="text-center text-danger">Registra tu Auto!!</h3><br>
                <label for="">Documento del Vendedor</label>
                <input type="text" name="documento" required class=form-control paceholder="Documento"><br>
                <label for="">Modelo</label>
                <input type="text" name="modelo" required class=form-control paceholder="Modelo"><br>
                <label for="">Marca</label>
                <input type="text" name="marca" required class=form-control paceholder="Marca"><br>
                <label for="">Color</label>
                <input type="text" name="color" required class=form-control paceholder="Color"><br>
                <label for="">Estado del Vehiculo</label>
                <select  class="form-control" name="estado">
                    <option>Nuevo</option>
                    <option>Usado </option>
                </select><br>
                <label for="">Precio</label>
                <input type="text" name="precio" required class=form-control paceholder="Precio"><br>
                <label for="">Categoria del Vehiculo</label>
                <select  class="form-control" name="categoria">
                    <option>Camioneta</option>
                    <option>Automovil </option>
                </select><br>

                <input type="submit" name="registro3" id="registro3" value="Registrarse" class="btn btn-danger btn-block" >
                <a href="indexV.php" class="btn btn-danger btn-block">Regresar</a>        
                
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

    <?php
    if (isset($_GET["mensaje"])) {?>
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center"><h4><?php echo $mensaje = $_GET["mensaje"]?></h4></div>
        </div>
        <div class="col-md-4"></div>
<?php
    }?>



</form>
    



<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>