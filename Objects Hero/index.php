<?php

require 'Hero.php';
require 'personnage/chevalier.php';
require 'personnage/viking.php';

$chevalier = new Chevalier();

$chevalier->setArme('Epee');
$chevalier->setPv(100);

var_dump($chevalier->display("Chevalier"));

$viking = new Viking();

$viking->setArme('Hache');
$viking->setPv(100);

var_dump($viking->display());

