<?php
class CarroDto{

    public $id_vendedor= 0;
    public $modelo="";
    public $marca="";
    public $color="";
    public $estado="";
    public $precio="";
    public $categoria="";

    //Id
    public function getId_vendedor()
    {
        return $this->id_vendedor;
    }
    public function setId_vendedor($id_vendedor)
    {
        $this->id_vendedor = $id_vendedor;
    }

    //Modelo
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    //Marca
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    //Color
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    //Estado
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    //Precio
    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    //Categoria
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}

?>