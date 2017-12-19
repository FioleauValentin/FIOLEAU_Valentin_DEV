<?php

$maChaine = 'Bonj';

if (strlen($maChaine) > 3 && strlen($maChaine) < 10)
	echo 'Ok';
else if (strlen($maChaine) < 3)
	echo 'Cette chaîne fait moins de trois caractères';
else if (strlen($maChaine) == 3)
	echo 'Cette chaîne à seulement trois caractères';
else
	echo 'Cette chaîne fait plus de dix caractères';

?>