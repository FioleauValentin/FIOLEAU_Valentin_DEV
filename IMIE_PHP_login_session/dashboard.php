<?php
include ('authentification.php');

if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
verifDroits();

echo '<h1>DASHBOARD - GESTIONNAIRE DE SESSION</h1>';
echo '<h2>Bienvenue sur votre session : '.$_SESSION['prenom'].' '.$_SESSION['nom'].'</h2>';
echo '<a href="deconnexion.php">Déconnexion</a>';
?>