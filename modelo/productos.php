<?php

abstract class Productos{
    public $tProd;
    public $nProducto;
    public $pProd;
    public $dProd;
    public $idProd;
    public $size;
    
    public function __construct($idProd,$nProducto,$tProd, $pProd,$size,$dProd){
        $this->idProd = $idProd;
        $this->nProducto = $nProducto;
        $this->tProd = $tProd;
        $this->pProd = $pProd;
        $this->size = $size;
        $this->dProd = $dProd;

    }
    

    /**
     * Get the value of pProd
     */ 
    public function getPProd()
    {
        return $this->pProd;
    }

    /**
     * Set the value of pProd
     *
     * @return  self
     */ 
    public function setPProd($pProd)
    {
        $this->pProd = $pProd;

        return $this;
    }

    /**
     * Get the value of tProd
     */ 
    public function getTProd()
    {
        return $this->tProd;
    }

    /**
     * Set the value of tProd
     *
     * @return  self
     */ 
    public function setTProd($tProd)
    {
        $this->tProd = $tProd;

        return $this;
    }

    /**
     * Get the value of idProd
     */ 
    public function getIdProd()
    {
        return $this->idProd;
    }

    /**
     * Set the value of idProd
     *
     * @return  self
     */ 
    public function setIdProd($idProd)
    {
        $this->idProd = $idProd;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    public abstract function cppt($size);


    /**
     * Get the value of nProducto
     */ 
    public function getNProducto()
    {
        return $this->nProducto;
    }

    /**
     * Set the value of nProducto
     *
     * @return  self
     */ 
    public function setNProducto($nProducto)
    {
        $this->nProducto = $nProducto;

        return $this;
    }


    /**
     * Get the value of dProd
     */ 
    public function getDProd()
    {
        return $this->dProd;
    }

    /**
     * Set the value of dProd
     *
     * @return  self
     */ 
    public function setDProd($dProd)
    {
        $this->dProd = $dProd;

        return $this;
    }
}

?>