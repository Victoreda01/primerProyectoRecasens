<?php

abstract class Personal{

    protected $nom;
    protected $dir;
    protected $datInc;
    protected $sBase;
    protected $irpf;

    public function __construct($nom,$dir,$datInc,$sBase,$irpf)
    {
        $this->nom = $nom;
        $this->dir = $dir;
        $this->datInc = $datInc;
        $this->sBase = $sBase;
        $this->irpf = $irpf;
    }

    abstract function calculaSouMensualNet();
    
    abstract function souMensualActualitzat();

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of dir
     */ 
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set the value of dir
     *
     * @return  self
     */ 
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * Get the value of datInc
     */ 
    public function getDatInc()
    {
        return $this->datInc;
    }

    /**
     * Set the value of datInc
     *
     * @return  self
     */ 
    public function setDatInc($datInc)
    {
        $this->datInc = $datInc;

        return $this;
    }

    /**
     * Get the value of sBase
     */ 
    public function getSBase()
    {
        return $this->sBase;
    }

    /**
     * Set the value of sBase
     *
     * @return  self
     */ 
    public function setSBase($sBase)
    {
        $this->sBase = $sBase;

        return $this;
    }

    /**
     * Get the value of irpf
     */ 
    public function getIrpf()
    {
        return $this->irpf;
    }

    /**
     * Set the value of irpf
     *
     * @return  self
     */ 
    public function setIrpf($irpf)
    {
        $this->irpf = $irpf;

        return $this;
    }
}
?>