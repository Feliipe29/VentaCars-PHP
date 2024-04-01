<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Autos en Venta</title>
</head>

<body class="container"><br>
    <center>
        <h2 class="text-info">Autos a la venta</h2><br>
        <table class="table table-striped mt-4" border="2">
            <thead>
                <tr>
                    <th>Modelo del Auto</th>
                    <th>Marca del Auto</th>
                    <th>Color del Auto</th>
                    <th>Estado del Auto</th>
                    <th>Precio del Auto</th>
                    <th>Categoria del Auto</th>
                    <th>Vendedor</th>
                </tr>
            </thead>
            <thead>
                <?php
                require_once "modelo.dao/carroDao.php";

                require_once "modelo.dto/carroDto.php";


                require_once "modelo.dao/vendedorDao.php";

                require_once "modelo.dto/vendedorDto.php";


                require_once "utilidades/conexion.php";
                $uDao = new CarroDao();
                $allusers = $uDao->listarTodos();
                foreach ($allusers as $user){?>

                
                <tr>
                    <td><?php echo $user["modelo"]; ?></td>
                    <td><?php echo $user["marca"]; ?></td>
                    <td><?php echo $user["color"]; ?></td>
                    <td><?php echo $user["estado"]; ?></td>
                    <td><?php echo $user["precio"]; ?></td>
                    <td><?php echo $user["categoria"]; ?></td>

                    <td><a href="DatosV.php?id=<?php echo $user["id_vendedor"] ?>">Ver Datos del Vendedor</a></td>

                <?php
                 }
                ?>
                </tr>
            </thead>
        </table>
    </center>

    <?php
    if (isset($_GET["mensaje"])) {?>
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center"><h4><?php echo $mensaje = $_GET["mensaje"]?></h4></div>
        </div>
        <div class="col-md-4"></div>
<?php
    }?>

    <br><center>
        <a href="indexC.php" class="btn btn-info">Regresar</a>
    </center>





<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>