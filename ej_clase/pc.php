<?php
require_once('dispositiu.php');

class Pc extends Dispositiu{

    protected $sobretaula;

    public function __construct($numSerie,$marca,$model,$preu,$anyCompra,$propietari,$sobretaula){
        Parent::__construct($numSerie,$marca,$model,$preu,$anyCompra,$propietari);
        $this->sobretaula = $sobretaula;
    }

    function calculaValor()
    {
        $anti= 0;
        $aC = date($this->anyCompra);
        $hoy = date("d/m/Y");

        $anyComp = explode("/",$aC);
        $tday = explode("/",$hoy);

        if($anyComp[2] < $tday[2]){
            $anti = $anyComp[2] - $tday[2];
        }else if($anyComp[2] == $tday[2]){
            if ($anyComp[1]<$tday[1]) {
                $anti ++;
            }else if ($anyComp[1] == $tday[1]){
                if ($anyComp[0]<$tday[0]) {
                    $anti++;
                }
            }
        }

        if ($this->getSobreTaula() == true) {
            for ($i=0; $i < $anti; $i++) { 
                $this->preu = $this->preu *1.10;
                $this->setPreu($this->preu);
            }
        }else{
            for ($i=0; $i < $anti; $i++) { 
                $this->preu = $this->preu *1.15;
                $this->setPreu($this->preu);
            }
        }
        

        
    }

    /**
     * Get the value of sobretaula
     */ 
    public function getSobretaula()
    {
        return $this->sobretaula;
    }

    /**
     * Set the value of sobretaula
     *
     * @return  self
     */ 
    public function setSobretaula($sobretaula)
    {
        $this->sobretaula = $sobretaula;

        return $this;
    }
}
?>