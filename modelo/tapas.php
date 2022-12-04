<?php
    
class tapa extends Productos{
    
    public $ingredientes = [];

    public function __construct($idProd,$nProducto,$tProd,$pProd,$ingredientes,$size,$dProd){
        Parent::__construct($idProd,$nProducto,$tProd,$pProd,$size,$dProd);
        $this->$ingredientes = $ingredientes;
  
      }
  
  
      /**
       * Get the value of ingredientes
       */ 
      public function getIngredientes()
      {
          return $this->ingredientes;
      }
  
      /**
       * Set the value of ingredientes
       *
       * @return  self
       */ 
      public function setIngredientes($ingredientes)
      {
          $this->ingredientes = $ingredientes;
  
          return $this;
      }


    public function cppt($size){
        $pProd = Parent::getPProd();

        switch ($size) {
            case 'M':
                $pProd += 0.15;
                Parent::setPProd($pProd);
                break;
            case 'XL':
                $pProd += 0.35;
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