<?php

class Viking extends Hero {
    public function display():array {
        $classePerso = parent::display();
        $classePerso["name"] = "Viking";
        return $classePerso;
    }
}