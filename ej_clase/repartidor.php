<?php

class Repartidor extends Treballador{

    protected $mobil;

    public function __construct($nom,$dir,$datInc,$sBase,$irpf,$mobil)
    {
        
        Parent::__construct($nom,$dir,$datInc,$sBase,$irpf);
        $this->mobil = $mobil;
    }

    function souMensualActualitzat()
    {
        $this->setSBase($this->getSBase() + ($this->getSBase()*0.08));
        return $this->calculaSouMensualNet();
    }


    /**
     * Get the value of mobil
     */ 
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Set the value of mobil
     *
     * @return  self
     */ 
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;

        return $this;
    }
}
?>