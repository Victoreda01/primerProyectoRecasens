<?php

class pedido{

    public $idPedido;
    public $idUser;
    public $idProducto = [];
    public $totalPedido;
    public $metodoPago;


    public function __construct($idPedido,$idUser,$idProducto,$totalPedido,$metodoPago)
    {
        $this->$idPedido = $idPedido;
        $this->$idUser = $idUser;
        $this->$idProducto = $idProducto;
        $this->$totalPedido = $totalPedido;
        $this->$metodoPago = $metodoPago;
    }

    /**
     * Get the value of idPedido
     */ 
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set the value of idPedido
     *
     * @return  self
     */ 
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of idProducto
     */ 
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set the value of idProducto
     *
     * @return  self
     */ 
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get the value of totalPedido
     */ 
    public function getTotalPedido()
    {
        return $this->totalPedido;
    }

    /**
     * Set the value of totalPedido
     *
     * @return  self
     */ 
    public function setTotalPedido($totalPedido)
    {
        $this->totalPedido = $totalPedido;

        return $this;
    }

    /**
     * Get the value of metodoPago
     */ 
    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    /**
     * Set the value of metodoPago
     *
     * @return  self
     */ 
    public function setMetodoPago($metodoPago)
    {
        $this->metodoPago = $metodoPago;

        return $this;
    }
}

?>