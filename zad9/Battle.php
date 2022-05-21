<?php
require_once "Fire.php";
require_once "Water.php";
require_once "Pokemon.php";
class Battle
{
private $poke1;
private $poke2;
private $begins;

    public function __construct($poke1, $poke2)
    {
        $this->poke1 = $poke1;
        $this->poke2 = $poke2;
        $random = rand(0,1);
        if ($random == 0) {
            $this->begins = $this->poke1;
        } else {
            $this->begins = $this->poke2;
        }
    }

    public function go() {
        if ($this->begins == $this->poke1) {
            while ($this->poke2->getHpCurrent() > 0 || $this->poke1->getHpCurrent() > 0) {
                $random = rand(0,5);
                if ($random < 4) {
                    $this->poke1->normalAttack($this->poke2);
                    $this->poke2->normalAttack($this->poke1);
                } else {
                    $this->poke1->chargedAttack($this->poke2);
                    $this->poke2->chargedAttack($this->poke1);
                }
            }
        } else if ($this->begins == $this->poke2) {
            while ($this->poke2->getHpCurrent() > 0 || $this->poke1->getHpCurrent() > 0) {
                $random = rand(0,5);
                if ($random < 5) {
                    $this->poke2->normalAttack($this->poke1);
                    $this->poke1->normalAttack($this->poke2);
                } else {
                    $this->poke2->chargedAttack($this->poke1);
                    $this->poke1->chargedAttack($this->poke2);
                }
            }
        } else {
            $random = rand(0,1);
            if ($random == 0) {
                $this->setBegins($this->poke1);
            } else {
                $this->setBegins($this->poke2);
            }
            $this->go();
        }
        if ($this->poke1->getHpCurrent() == $this->poke2->getHpCurrent()) {
            echo "Nikt nie wygrał.";
            exit();
        }
        if ($this->poke1->getHpCurrent() < $this->poke2->getHpCurrent()) {
            echo "Wygrał " . $this->poke2->getName();
            exit();
        }
        if ($this->poke2->getHpCurrent() < $this->poke1->getHpCurrent()) {
            echo "Wygrał " . $this->poke1->getName();
            exit();
        }
    }

    public function getPoke1()
    {
        return $this->poke1;
    }

    public function setPoke1($poke1)
    {
        $this->poke1 = $poke1;
    }

    public function getPoke2()
    {
        return $this->poke2;
    }

    public function setPoke2($poke2)
    {
        $this->poke2 = $poke2;
    }

    public function getBegins()
    {
        return $this->begins;
    }

    public function setBegins($begins)
    {
        $this->begins = $begins;
    }






}