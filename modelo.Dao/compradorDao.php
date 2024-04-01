<?php
class CompradorDao{

    public function registrarComp(CompradorDto $compradorDto){
        $cnn = Conexion::getConexion();
        $mensaje = ""; 
        try {
            $query = $cnn->prepare("INSERT INTO comprador VALUES(?,?,?)");
            $query->bindParam(1, $compradorDto->getDocumento1());
            $query->bindParam(2, $compradorDto->getNombre1());
            $query->bindParam(3, $compradorDto->getTelefono1());
            $query->execute();
            $mensaje = "Comprador registrado con exito";
            
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
            $listarUsuarios = "select * from comprador";
            $query = $cnn->prepare($listarUsuarios);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo "Error".$ex->getMessage();
        }
    }

}