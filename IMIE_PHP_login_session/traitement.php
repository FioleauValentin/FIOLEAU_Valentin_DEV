<?php
include ('index.php');

require 'user.php';
$user = new User();

if (isset($_POST['email']) && isset($_POST['password']))
{
	if (!empty($_POST['email']) && !empty($_POST['password']))
	{
		if(($_POST['email'] == $user->getEmail()) && ($_POST['password'] == $user->getPassword()))
		{
			session_start();
			
			$_SESSION['nom'] = $user->getNom();
			$_SESSION['prenom'] = $user->getPrenom();
			$_SESSION['email'] = $user->getEmail();
			$_SESSION['password'] = $user->getPassword();

			header('Location: dashboard.php'); //succès je vais au dashboard
		} 
		else
			header('Location: index.php?message=erreur'); //erreur je retourne à l'accueil
	}
	else
		header('Location: index.php?message=erreur'); //erreur je retourne à l'accueil
}
else 
	header('Location: index.php?message=erreur'); //erreur je retourne à l'accueil
?>