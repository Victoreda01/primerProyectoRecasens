<?php


class calculaSou{

    static function calculaSumaSous($ltreballadors){
        $sumaSou = 0;
        foreach ($ltreballadors as $trbl) {
            $sumaSou += $trbl->getSBase();
        }
        return $sumaSou;
    }

}

?>