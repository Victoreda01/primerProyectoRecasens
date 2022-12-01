<?php

class Gerent extends Personal{

    protected $complement;
    protected $carrec;
    protected $equip;  

    function __construct($nom,$dir,$datInc,$sBase,$irpf,$complement,$carrec,$equip)
    {
        Parent::__construct($nom,$dir,$datInc,$sBase,$irpf);
        $this->complement = $complement;
        $this->carrec = $carrec;
        $this->equip = $equip;

    }

    

    function calculaSouMensualNet(){
        $souNet = (($this->sBase * (1-$this->irpf)) / 12) + $this->complement; 
        return round($souNet);
    }
    
    function souMensualActualitzat()
    {
        $this->setComplement($this->complement * 0.5);
        return $this->calculaSouMensualNet();
    }

    /**
     * Get the value of complement
     */ 
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of complement
     *
     * @return  self
     */ 
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of carrec
     */ 
    public function getCarrec()
    {
        return $this->carrec;
    }

    /**
     * Set the value of carrec
     *
     * @return  self
     */ 
    public function setCarrec($carrec)
    {
        $this->carrec = $carrec;

        return $this;
    }

    /**
     * Get the value of equip
     */ 
    public function getEquip()
    {
        return $this->equip;
    }

    /**
     * Set the value of equip
     *
     * @return  self
     */ 
    public function setEquip($equip)
    {
        $this->equip = $equip;

        return $this;
    }
}
?>