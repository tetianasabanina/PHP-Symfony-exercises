<?php 
class PlayerHealthManager {
    private $currentHP;
    private $maxHP;

    public function __construct($currentHP, $maxHP) {
        $this->currentHP = $currentHP;
        $this->maxHP = $maxHP;
    }

    public function addPlayerHealth($healthAmount) {
        $this->currentHP += $healthAmount;
        echo "health added " . $healthAmount . ", current HP " . $this->currentHP . "<br>";
        if ($this->currentHP > $this->maxHP) {
            $this->setmaxHealth();
        }
        return $this->currentHP;
    }
    public function setmaxHealth($maxHP){
        $this->currentHP = $this->maxHP;
        echo "current health exeeds max health, max health is set: " . $this->currentHP . "<br>";
        return $this->currentHP;

    }
    public function hurtPlayer($damageToGive){
        // echo "currentH to damage " . $this->currentHP;
        $this->currentHP -= $damageToGive;
        echo "health decreased - " . $damageToGive . ", current HP " . $this->currentHP . "<br>";
        return $this->currentHP;
    }

}


?>