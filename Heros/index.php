<?php
require 'Hero.php';
require 'Viking.php';
require 'Chevalier.php';
require 'Combat.php';
require 'Arme.php';

$epee = new Arme("epee", 5);
$hache = new Arme("hache", 10);
$baton = new Arme("baton", 1);


$combat = new Combat();

$viking = new Viking();

$viking->setName("Boby");
$viking->setArme($baton);

$combat->addJoueurs($viking);

$chevalier = new Chevalier();

$chevalier->setName("Jack");
$chevalier->setArme($epee);

$combat->addJoueurs($chevalier);

$combat->debut();