<?php
include ('bcrypt.php');

$bcrypt = new Bcrypt(15);

$hash = $bcrypt->hash($_POST['password_password']);
$isGood = $bcrypt->verify($_POST['password_password'], $hash);

//echo $isGood;
//echo $hash;

$list = array (
   array($_POST['email_password'], $hash),
);

$fp = fopen('password.csv', 'a');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

// Lecture du fichier CSV en mode W.
/*if ($fp = fopen('password.csv', 'w'))
{
		
    $row = 1; // Variable pour numéroter les lignes
    $newcontenu = '';
    // Variable contenant la nouvelle ligne :
    $nouvelle_ligne = $_POST['email_password'] . ' ' . $_POST['password_password'];
    // Lecture du fichier ligne par ligne :
    while (($ligne = fgets($fp)) !== FALSE)
    {
        // Si le numéro de la ligne est égal au numéro de la ligne à modifier :
        if ($row == 1)
        {
            $newcontenu = $newcontenu . $nouvelle_ligne;
        }
        // Sinon, on réécri la ligne
        else
        {
            $newcontenu = $newcontenu . $ligne;
        }
        $row++;    
    }
    fclose($fp);
    $fichierecriture = fopen('password.csv', 'w');
    fputs($fichierecriture, $newcontenu);
    fclose($fichierecriture);
	
}  */       
header('Location: dashboard.php?message=succes'); //succès je vais au dashboard
?>