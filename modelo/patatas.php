<?php
include_once 'productos.php';

class patata extends productos{

    protected $tipo;
    protected $salsa;


    public function __construct($idProd,$nProducto,$tProd,$pProd,$tipo,$salsa,$size,$dProd){
      Parent::__construct($idProd,$nProducto,$tProd,$pProd,$size,$dProd);
      $this->tipo = $tipo;
      $this->salsa = $salsa;


    }


    /**
     * Get the value of salsa
     */ 
    public function getSalsa()
    {
        return $this->salsa;
    }

    /**
     * Set the value of salsa
     *
     * @return  self
     */ 
    public function setSalsa($salsa)
    {
        $this->salsa = $salsa;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
    
    public function cppt($size){

        $pProd = Parent::getPProd();

        switch ($size) {
            case "S":
                $pProd += 0.15;
                Parent::setPProd($pProd);
                break;
            case "M":
                $pProd += 0.35;
                Parent::setPProd($pProd);
                break;
            case "XL":
                $pProd += 1.25;
                Parent::setPProd($pProd);
                break;
            default:
                $pProd += 0.0;
                Parent::setPProd($pProd);
                break;
        }

    }
}


?>