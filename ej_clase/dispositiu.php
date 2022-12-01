<?php

abstract class Dispositiu{

    protected $numSerie;
    protected $marca;
    protected $model;
    protected $preu;
    protected $anyCompra;
    protected $propietari = null;

    public function __construct($numSerie,$marca,$model,$preu,$anyCompra,$propietari)
    {
        $this->numSerie = $numSerie;
        $this->marca = $marca;
        $this->model = $model;
        $this->preu = $preu;
        $this->anyCompra = $anyCompra;
        $this->propietari = $propietari;

    }

    abstract function calculaValor();


    /**
     * Get the value of numSerie
     */ 
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set the value of numSerie
     *
     * @return  self
     */ 
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of preu
     */ 
    public function getPreu()
    {
        return $this->preu;
    }

    /**
     * Set the value of preu
     *
     * @return  self
     */ 
    public function setPreu($preu)
    {
        $this->preu = $preu;

        return $this;
    }

    /**
     * Get the value of anyCompra
     */ 
    public function getAnyCompra()
    {
        return $this->anyCompra;
    }

    /**
     * Set the value of anyCompra
     *
     * @return  self
     */ 
    public function setAnyCompra($anyCompra)
    {
        $this->anyCompra = $anyCompra;

        return $this;
    }

    /**
     * Get the value of propietari
     */ 
    public function getPropietari()
    {
        return $this->propietari;
    }

    /**
     * Set the value of propietari
     *
     * @return  self
     */ 
    public function setPropietari($propietari)
    {
        $this->propietari = $propietari;

        return $this;
    }
}
?>