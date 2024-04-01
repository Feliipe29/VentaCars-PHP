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
            <form action="" method="POST">
                <h3 class="text-center text-danger">Inicio Sesión de Vendendor!!</h3><br>
                <label for="">Documento</label>
                <input type="text" name="documento" required class=form-control paceholder="Documento"><br>
                <label for="">Nombre</label>
                <input type="text" name="nombre" required class=form-control paceholder="Nombre"><br>
                <label for="">Telefono</label>
                <input type="text" name="telefono" required class=form-control paceholder="telefono"><br>

                <label for="">Contraseña</label>
                <input type="password" name="contraseña" required class=form-control paceholder="contraseña"><br>

                <a href="indexV.php" class="btn btn-danger btn-block">Iniciar</a>        
                <a href="index.php" class="btn btn-danger btn-block">Regresar</a>        
                
            </form>
        </div>

</body>
</html>