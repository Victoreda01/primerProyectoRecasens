<?php

class pedido{

    public $producto;
    public $cantidad;


    public function __construct($producto)
    {
        $this->producto = $producto;
        $this->cantidad = 1;
    }

    

    /**
     * Get the value of producto
     */ 
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set the value of producto
     *
     * @return  self
     */ 
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }
    /**
     * Get the value of cantidad
     */ 
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */ 
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function sumaCantidad($cantidad)
    {
        $this->cantidad += $cantidad;

        return $this;
    }

    public function calculaPrecio(){
        $total = $this->cantidad * $this->producto->getPProd();
        return $total;
    }
    
}

?>