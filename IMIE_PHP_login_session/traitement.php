<?php
include ('index.php');

if (isset($_POST['email']) && isset($_POST['password']))
{
	if (!empty($_POST['email']) && !empty($_POST['password']))
	{
		if(($_POST['email'] == $user_email) && ($_POST['password'] == $user_password))
		{
			session_start();
			$_SESSION['nom'] = $user_lastname;
			$_SESSION['prenom'] = $user_firstname;
			$_SESSION['email'] = $user_email;
			$_SESSION['password'] = $user_password;

			header('Location: dashboard.php'); //succès je vais au dashboard
		} 
		else
			header('Location: index.php?message=erreur'); //erreur je retourne à l'accueil
	}
	else
		header('Location: index.php?message=erreur'); //erreur je retourne à l'accueil
		
}
else 
{
	header('Location: index.php?message=erreur'); //erreur je retourne à l'accueil
}
?>