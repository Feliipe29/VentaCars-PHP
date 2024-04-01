<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Datos del Vendedor</title>
</head>

<body class="container"><br>
    <center>
        <h2 class="text-info">Autos a la venta</h2><br>
        <table class="table table-striped mt-4" border="2">
            <thead>
                <tr>
                    <th>Nombre del Vendedor</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <thead>
                <?php
                require "modelo.dao/vendedorDao.php";

                require "modelo.dto/vendedorDto.php";

                require "utilidades/conexion.php";

                if ($_GET["id"] != NULL){
                    $uDao = new VendedorDao();
                    $user = $uDao->obtenerVendedor($_GET["id"]);
                }


                ?>

                
                <tr>
                    <td><?php echo $user["nombre"]; ?></td>
                    <td><?php echo $user["telefono"]; ?></td>
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
        <a href="Consultar.php" class="btn btn-info">Regresar</a>
    </center>





<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>