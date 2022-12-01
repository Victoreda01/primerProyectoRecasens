<?php
require_once('dispositiu.php');

class Mobil extends Dispositiu{

    protected $num;

    public function __construct($numSerie,$marca,$model,$preu,$anyCompra,$propietari,$num){
        Parent::__construct($numSerie,$marca,$model,$preu,$anyCompra,$propietari);
        $this->num = $num;
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

        
        for ($i=0; $i < $anti; $i++) { 
            $this->preu = $this->preu *1.25;
            $this->setPreu($this->preu);
        }

        
    }

    /**
     * Get the value of num
     */ 
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set the value of num
     *
     * @return  self
     */ 
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }
}
?>