<?php

class Matikka {
    // if the variable will be used in some other code
    private $kalori;
    public function setKalori($kalori){
        $this->kalori = $kalori;
    }
    public function energiaMuunnin2(){
        return $this->kalori * 4.1885;
    }

    // if there is no need in the variable later
    public function energiaMuunnin($kalori){
        return $kalori * 4.1855;
    }
    
    public function energiaMuunnin3($kalori = 0, $joule = 0){
        if($kalori == 0) {
            return $joule / 4.1885 . " cal";
        } else if ($joule == 0) {
        }
    }   
}
?>