<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$urlfond= isset($_POST["urlfond"])? $_POST["urlfond"] : "";



$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');




$req = $bdd->exec("UPDATE vendeur SET urlfond='$urlfond' WHERE mailvend = '$mailvend' ");



header('Location: Compte_vendeur.php');
?>
