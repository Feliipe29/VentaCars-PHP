<?php

require "../modelo.dao/carroDao.php";
require "../modelo.dto/carroDto.php";
require "../utilidades/conexion.php";

if(isset($_POST["registro3"])){
    $uDao = new CarroDao();
    $uDto = new CarroDto();
    $uDto->setId_vendedor($_POST["documento"]);
    $uDto->setModelo($_POST["modelo"]);
    $uDto->setMarca($_POST["marca"]);
    $uDto->setColor($_POST["color"]);
    $uDto->setEstado($_POST["estado"]);
    $uDto->setPrecio($_POST["precio"]);
    $uDto->setCategoria($_POST["categoria"]);
    

    
    $mensaje = $uDao->registrarCarro($uDto);

    header("Location:../Rcarro.php?mensaje=".$mensaje);
}

