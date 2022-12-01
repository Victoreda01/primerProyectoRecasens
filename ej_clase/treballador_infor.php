<?php

class Informatic extends Treballador{

    protected $eInform;

    public function __construct($nom,$dir,$datInc,$sBase,$irpf,$eInform)
    {
        
        Parent::__construct($nom,$dir,$datInc,$sBase,$irpf);
        $this->eInform = $eInform;
    }

    


    /**
     * Get the value of eInform
     */ 
    public function getEInform()
    {
        return $this->eInform;
    }

    /**
     * Set the value of eInform
     *
     * @return  self
     */ 
    public function setEInform($eInform)
    {
        $this->eInform = $eInform;

        return $this;
    }
}
?>