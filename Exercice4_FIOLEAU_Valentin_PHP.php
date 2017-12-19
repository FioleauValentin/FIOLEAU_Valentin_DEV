<?php

$nbPhotocop = 40;

$dixCents = 0.10;
$huitCents = 0.08;
$cinqCents = 0.05;

if ($nbPhotocop <= 10){
	$facture = ($nbPhotocop * $dixCents);
	echo 'Le prix total est de : '.$facture.' euro';
}
else if ($nbPhotocop > 10 && $nbPhotocop <= 30){
	$vingtSuivantes = ($nbPhotocop - 10);
	$facture = (1 + ($vingtSuivantes*$huitCents));
	echo 'Le prix total est de : '.$facture.' euro';
}
else if ($nbPhotocop > 30){
	$reste = ($nbPhotocop - 30);
	$facture = (1 + 1.6 + ($reste*$cinqCents));
	echo 'Le prix total est de : '.$facture.' euro';
}
?>