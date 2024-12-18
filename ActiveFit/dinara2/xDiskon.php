<?php

class Diskon {
    /**
     * @param int $steps
     * @return mixed
     */
    public function getDiskon($steps) {
        $discount =0;
        $hargaAwal =50000;

        if ($steps>=5000){
            $discount=5;
        }
        $hargaAkhir = $hargaAwal * (1-$discount/100);
        
        $discount= ['discount'=> $discount,
        'step'=> $steps,
        'hargaAkhir'=>$hargaAkhir];

        return $discount;
     }
    /**
     * @return array 
     *
     */
    public function getHistory() {
        $a = new stdClass;
        $a->step ='200000';
        $a->diskon ='10%';

        $b = new stdClass;
        $b->step ='100000';
        $b->diskon ='25%';

        $history = [$a,$b];
        return $history;
    }
}