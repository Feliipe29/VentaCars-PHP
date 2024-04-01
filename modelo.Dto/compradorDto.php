<?php

class CompradorDto{

    public $Documento1="";
    public $Nombre1="";
    public $Telefono1="";
    
    //Documento
    public function getDocumento1()
    {
        return $this->Documento1;
    }
    public function setDocumento1($Documento1)
    {
        $this->Documento1 = $Documento1;
    }

    //Nombre
    public function getNombre1()
    {
        return $this->Nombre1;
    }
    public function setNombre1($Nombre1)
    {
        $this->Nombre1 = $Nombre1;
    }

    //Telefono
    public function getTelefono1()
    {
        return $this->Telefono1;
    }
    public function setTelefono1($Telefono1)
    {
        $this->Telefono1 = $Telefono1;
    }
}


?>