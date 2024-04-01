<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Vendedor</title>
</head>
<body>

<div class="row mt-3">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="controladores/controladores.php" method="POST">
                <h3 class="text-center text-warning">Registrate Vendendor!!</h3><br>
                <label for="">Documento</label>
                <input type="text" name="documento" required class=form-control paceholder="Documento"><br>
                <label for="">Nombre</label>
                <input type="text" name="nombre" required class=form-control paceholder="Nombre"><br>
                <label for="">Telefono</label>
                <input type="text" name="telefono" required class=form-control paceholder="telefono"><br>

                <label for="">Contraseña</label>
                <input type="password" name="contraseña" required class=form-control paceholder="contraseña"><br>
                <label for="">Confirmar Contraseña</label>
                <input type="password" name="contraseña" required class=form-control paceholder="contraseña"><br>


                <input type="submit" name="registro" id="registro" value="Registrarse" class="btn btn-warning btn-block" >
                <a href="index.php" class="btn btn-warning btn-block">Regresar</a>        
                
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