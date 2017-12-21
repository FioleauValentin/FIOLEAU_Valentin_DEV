<?php 
//FONCTION QUI PERMET LA VÉRIFICATION DES DROITS AUX UTILISATEURS ET QUI REDIRIGE SUR L'INDEX (index.php)
function verifDroits() 
{
	if (!isset($_SESSION['nom']) && !isset($_SESSION['prenom']) && !isset($_SESSION['password']) && !isset($_SESSION['email'])) {
		header ('Location: index.php?message=erreur1');
	}
}
?>