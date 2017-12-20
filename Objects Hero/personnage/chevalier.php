<?php

class Chevalier extends Hero {
    public function display():array {
        $classePerso = parent::display();
        $classePerso["name"] = "Chevalier";
        return $classePerso;
    }
}