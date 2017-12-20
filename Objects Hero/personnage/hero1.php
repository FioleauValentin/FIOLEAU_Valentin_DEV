<?php

class Hero1 extends Specialite {
    public function display():array {
        $classeperso = parent::display();
        $classeperso["name"] = "Chevalier";
        return $classeperso;
    }
}