<?php

class Pokemon
{
private $name;
private $type;
private $hp_max;
private $hp_current;
private $is_confused;
private $is_paralyzed;
private $photoURL;

    public function __construct($name, $type, $hp_max, $hp_current, $photoURL)
    {
        $this->name = $name;
        $this->type = $type;
        $this->hp_max = $hp_max;
        $this->hp_current = min($hp_current, $hp_max);
        $this->is_confused = false;
        $this->is_paralyzed = false;
        $this->photoURL = $photoURL;
    }

    public function normalAttack($pokemon2) {
        $specialAction = rand(0,9);
        if ($specialAction == 1) {
            echo "<br>";
            echo $pokemon2->getName() . " is confused.";
            echo "<br>";
            $pokemon2->setIsConfused(true);
        }
        if ($specialAction == 4) {
            echo "<br>";
            echo $pokemon2->getName() . " is paralyzed";
            echo "<br>";
            $pokemon2->setIsParalyzed(true);
        }
        $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 2);
        if ($this->getStrength() == "Normal") {
            if ($pokemon2->getIsConfused() == true) {
                $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 1);
                $pokemon2->setIsConfused(false);
            }
            if ($pokemon2->getIsParalyzed() == true) {
                $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 3);
                $pokemon2->setIsParalyzed(false);
            }
            $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 2);
        }
        echo "<br>";
        echo "Attack! " . $pokemon2->getName() . "'s current hp is : " . $pokemon2->getHpCurrent();
    }

    public function chargedAttack($pokemon2) {
        $specialAction = rand(0, 9);
        if ($specialAction == 1) {
            echo "<br>";
            echo $pokemon2->getName() . " is confused.";
            echo "<br>";
            $pokemon2->setIsConfused(true);
        }
        if ($specialAction == 4) {
            echo "<br>";
            echo $pokemon2->getName() . " is paralyzed";
            echo "<br>";
            $pokemon2->setIsParalyzed(true);
        }
        $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 6);
        if ($this->getStrength() == "Charged") {
            if ($pokemon2->getIsConfused() == true) {
                $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 1);
                $pokemon2->setIsConfused(false);
            }
            if ($pokemon2->getIsParalyzed() == true) {
                $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 3);
                $pokemon2->setIsParalyzed(false);
            }
            $pokemon2->setHpCurrent($pokemon2->getHpCurrent() - 5);
        }
        echo "<br>";
        echo "Attack! " . $pokemon2->getName() . "'s current hp is : " . $pokemon2->getHpCurrent();
    }

    public function view() {
        echo "<img src='" . $this->getPhotoURL() . "'height=100px>";
        echo "<br>";
        echo "Type: " . $this->getType();
        echo "<br>";
        echo "Current hp: " . $this->getHpCurrent();
        echo "<br>";
        echo "<br>";
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }


    public function getHpMax()
    {
        return $this->hp_max;
    }


    public function setHpMax($hp_max)
    {
        $this->hp_max = $hp_max;
    }


    public function getHpCurrent()
    {
        return $this->hp_current;
    }


    public function setHpCurrent($hp_current)
    {
            $this->hp_current = $hp_current;

    }

    public function getIsConfused()
    {
        return $this->is_confused;
    }

    public function setIsConfused($is_confused)
    {
        $this->is_confused = $is_confused;
    }

    public function getIsParalyzed()
    {
        return $this->is_paralyzed;
    }

    public function setIsParalyzed($is_paralyzed)
    {
        $this->is_paralyzed = $is_paralyzed;
    }

    public function getPhotoURL()
    {
        return $this->photoURL;
    }

    public function setPhotoURL($photoURL)
    {
        $this->photoURL = $photoURL;
    }









}