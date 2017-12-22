<?php
include ('authentification.php');

if (session_status() == PHP_SESSION_NONE) {
   session_start();
}

verifDroits();

echo '<h1> DASHBOARD - GESTIONNAIRE DE SESSION </h1>';
echo '<h2> Bienvenue sur votre session : '.$_SESSION['prenom'].' '.$_SESSION['nom'].' </h2>';

if (isset($_GET['message'])) {
    if ($_GET['message'] == 'succes') {
        ?>
        <div style="background-color: green; color:white; border:2px solid black;">
            CSV généré.
        </div><br />
        <?php               
    }
}

?>

<form action="addpassword.php" method="POST">
<label>Email
<input name="email_password"></input></label>
<label>Password
<input name="password_password"></input></label>
<input type="submit"></input>
</form>

<a href="deconnexion.php">Déconnexion</a>