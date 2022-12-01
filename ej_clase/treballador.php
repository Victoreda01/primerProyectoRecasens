<?php
require_once('personal.php');

class Treballador extends Personal{

    function calculaSouMensualNet(){
        $souNet = ($this->sBase * (1-$this->irpf)) / 12; 
        return round($souNet);
    }
    function souMensualActualitzat()
    {
        if ($this->getSBase() < 17000) {
            $this->setSBase($this->getSBase() + ($this->getSBase()*0.1));
            return $this->calculaSouMensualNet();
        }
       
        
    }

}
?>