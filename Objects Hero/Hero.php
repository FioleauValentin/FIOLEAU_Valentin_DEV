<?php

class Hero {
    private $arme;
    private $pv;

    public function getArme()
    {
        return $this->arme;
    }

    public function setArme($arme)
    {
        $this->arme = $arme;
    }

    public function getPv()
    {
        return $this->pv;
    }

    public function setPv($pv)
    {
        $this->pv = $pv;
    }

    protected function display():array {
        return [
            "pv" => $this->pv,
            "arme" => $this->arme
        ];
    }
}