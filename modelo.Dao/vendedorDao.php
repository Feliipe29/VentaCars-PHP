<?php
class VendedorDao{

    public function registrarUsuario(VendedorDto $vendedorDto){
        $cnn = Conexion::getConexion();
        $mensaje = ""; 
        try {
            $query = $cnn->prepare("INSERT INTO vendedor VALUES(?,?,?)");
            $query->bindParam(1, $vendedorDto->getId_vendedor());
            $query->bindParam(2, $vendedorDto->getNombre());
            $query->bindParam(3, $vendedorDto->getTelefono());
            $query->execute();
            $mensaje = "Vendedor registrado con exito";
            
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
            $listarUsuarios = "select * from vendedor";
            $query = $cnn->prepare($listarUsuarios);
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