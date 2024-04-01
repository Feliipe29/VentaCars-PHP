<?php

require "../modelo.dao/vendedorDao.php";
require "../modelo.dto/vendedorDto.php";
require "../utilidades/conexion.php";

if(isset($_POST["registro"])){
    $uDao = new VendedorDao();
    $uDto = new VendedorDto();
    $uDto->setId_vendedor($_POST["documento"]);
    $uDto->setNombre($_POST["nombre"]);
    $uDto->setTelefono($_POST["telefono"]);
    $mensaje = $uDao->registrarUsuario($uDto);

    header("Location:../Rvendedor.php?mensaje=".$mensaje);
}