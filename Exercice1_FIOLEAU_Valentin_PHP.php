<?php

$age = 1;

if ($age > 5 && $age < 8 )
	echo 'Poussin';
else if ($age > 7 && $age < 10 )
	echo 'Pupille';
else if ($age > 9 && $age < 12 )
	echo 'Minime';
else if ($age > 11)
	echo 'Cadet';
else echo 'Vous n\'avez pas de catégorie';
?>