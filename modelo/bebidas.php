<?php
    
class bebida extends Productos{
    
    public $marca;

    public function __construct($idProd,$nProducto,$tProd,$pProd, $marca, $size,$dProd){
        Parent::__construct($idProd,$nProducto,$tProd,$pProd,$size,$dProd);
        $this->$marca = $marca;
  
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

    public function cppt($size){
        $pProd = Parent::getPProd();

        switch ($size) {
            case 'M':
                $pProd += 0.55;
                Parent::setPProd($pProd);
                break;
            case 'XL':
                $pProd += 0.75;
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