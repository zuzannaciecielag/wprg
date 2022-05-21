<?php
require_once "Pokemon.php";

class Water extends Pokemon
{
private $weakness;
private $strength;

    public function __construct($name, $hp_current, $photoUrl)
    {
        parent::__construct($name, "Water", 30, $hp_current, $photoUrl);
        $this->weakness = "Fire";
        $this->strength = "Normal";
    }

    public function normalAttack($pokemon2)
    {
        parent::normalAttack($pokemon2);
        if ($pokemon2->getType() == "Fire") {
            $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 1);
        }
    }

    public function chargedAttack($pokemon2)
    {
        parent::chargedAttack($pokemon2);
        if ($pokemon2->getType() == "Fire") {
            $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 2);
        }
    }

    public function getWeakness()
    {
        return $this->weakness;
    }


    public function getStrength()
    {
        return $this->strength;
    }


}