<?php

require "../modelo.dao/compradorDao.php";
require "../modelo.dto/compradorDto.php";
require "../utilidades/conexion.php";

if(isset($_POST["registro2"])){
    $uDao = new CompradorDao();
    $uDto = new CompradorDto();
    $uDto->setDocumento1($_POST["documento1"]);
    $uDto->setNombre1($_POST["nombre1"]);
    $uDto->setTelefono1($_POST["telefono1"]);

    $mensaje = $uDao->registrarComp($uDto);
    header("Location:../Rcomprador.php?mensaje=".$mensaje);
}