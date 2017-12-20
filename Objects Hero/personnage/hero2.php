<?php

class Hero2 extends Specialite {
    public function display():array {
        $classeperso = parent::display();
        $classeperso["name"] = "Viking";
        return $classeperso;
    }
}