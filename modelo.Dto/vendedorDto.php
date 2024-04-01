<?php

class VendedorDto{
    public $id_vendedor= 0;
    public $nombre= "";
    public $telefono="";

    //ID
    public function getId_vendedor()
    {
        return $this->id_vendedor;
    }
    public function setId_vendedor($id_vendedor)
    {
        $this->id_vendedor = $id_vendedor;
    }

    //Nombre
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    //Telefono
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}

?>