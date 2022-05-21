<?php
require_once "Pokemon.php";


class Fire extends Pokemon
{
private $weakness;
private $strength;

    public function __construct($name, $hp_current, $photoUrl)
    {
        parent::__construct($name, "Fire", 20, $hp_current, $photoUrl);
        $this->weakness = "Water";
        $this->strength = "Charged";
    }

    public function normalAttack($pokemon2)
    {
        parent::normalAttack($pokemon2);
        if ($pokemon2->getType() == "Water") {
            $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 1);
        }
    }

    public function chargedAttack($pokemon2)
    {
        parent::chargedAttack($pokemon2);
        if ($pokemon2->getType() == "Water") {
            $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 5);
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