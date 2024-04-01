<?php
class CarroDao{

    public function registrarCarro(CarroDto $carroDto){
        $cnn = Conexion::getConexion();
        $mensaje = ""; 
        try {
            $query = $cnn->prepare("INSERT INTO vehiculo VALUES(?,?,?,?,?,?,?)");
            $query->bindParam(1, $carroDto->getId_vendedor());
            $query->bindParam(2, $carroDto->getModelo());
            $query->bindParam(3, $carroDto->getMarca());
            $query->bindParam(4, $carroDto->getColor());
            $query->bindParam(5, $carroDto->getEstado());
            $query->bindParam(6, $carroDto->getPrecio());
            $query->bindParam(7, $carroDto->getCategoria());
            

            $query->execute();
            $mensaje = " Auto registrado con exito";
            
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn=null;
        return $mensaje;
    }

    //Listar Usuarios

    public function listarTodos(){
        $cnn = Conexion::getConexion();
        try {
            $listarCarro = "select * from vehiculo";
            $query = $cnn->prepare($listarCarro);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo "Error".$ex->getMessage();
        }
    }

    // Obtener Usuario
    public function obtenerVendedor($idVendedor){
        $cnn = Conexion::getConexion(); 
        $mensaje = "";
        try {
            $query = $cnn->prepare("SELECT * from vendedor WHERE id_vendedor =?");
            $query->bindParam(1,$idVendedor);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo "Error". $ex->getMessage();
        }
        $cnn=null;
        return $mensaje;
     }

    

}