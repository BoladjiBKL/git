<?php

$mailadmin = isset($_POST["mailadmin"])? $_POST["mailadmin"] : "";
$mdpadmin= isset($_POST["mdpadmin"])? $_POST["mdpadmin"] : "";


$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
// on vérifie que l'administrateur éxiste bien
$verf= $bdd->prepare('SELECT * FROM administrateur WHERE mailadmin= :mailadmin AND mdpadmin= :mdpadmin');
$verf->execute(array(
	'mailadmin' => $mailadmin,
	'mdpadmin' => $mdpadmin,
));

$donnees= $verf->fetch();
// on vérifie que la personne a bien rempli les champs du formulaire
if ($mailadmin=="" && $mdpadmin=="")
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail et mot de passe vides");
			document.location.href="Co_admin.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}


if ($mailadmin=="") {
	?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail vide");
			document.location.href="Co_admin.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}

if ($mdpadmin =="") {

	?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mot de passe vide");
			document.location.href="Co_admin.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}



if($donnees)
{
 // si les conditions sont bien respectées la personne est redirigée vers sa page de profil
	header('Location: Compte_admin.php');
}

else {
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Votre compte n'existe pas");
			document.location.href="Co_admin.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}



?>
