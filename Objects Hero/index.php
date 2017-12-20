<?php

require 'Specialite.php';
require 'personnage/hero1.php';
require 'personnage/hero2.php';

$hero1 = new Hero1();

$hero1->setArme('epee');
$hero1->setPv(100);

var_dump($hero1->display("Viking"));

$hero2 = new Hero2();

$hero2->setArme('hache');
$hero2->setPv(100);

var_dump($hero2->display());

