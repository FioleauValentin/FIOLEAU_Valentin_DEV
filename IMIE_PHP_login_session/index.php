<h1>PHP - Login et Session - By Valentin FIOLEAU</h1>

<?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}

if (isset($_GET['message'])) {
    if ($_GET['message'] == 'erreur') {
        ?>
        <div style="background-color: red; color:white; border:2px solid black;">
            Identifiants incorrects.
        </div><br />
        <?php               
    }
    if ($_GET['message'] == 'erreur1') {
        ?>
        <div style="background-color: red; color:white; border:2px solid black;">
            Vous devez vous connecter pour accèder à cette page !
        </div><br />
        <?php               
    }
}
?>

<form action="traitement.php" method="POST">
<label>Email
<input name="email"></input></label>
<label>Password
<input name="password"></input></label>
<input type="submit"></input>
</form>



