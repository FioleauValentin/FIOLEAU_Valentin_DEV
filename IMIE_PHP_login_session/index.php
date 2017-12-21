<h1>PHP - Login et Session - By Valentin FIOLEAU</h1>

<?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}

$user_lastname = "DOE";
$user_firstname = "John";
$user_email = "John.doe@domain.tld";
$user_password = "mdpsupersecure";

if (isset($_GET['message'])) {
    if ($_GET['message'] == 'erreur') {
        ?>
        <div style="background-color: red; color:white; border:2px solid black;">
                Identifiants incorrects.
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



