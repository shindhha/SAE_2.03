<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
</head>
<body>
	<div>
		<?php
		$hostname = '192.168.202.136';
		$dbName = 'INTRANET';
		$user = 'admin';
		$password = 'mysql';
		try {
			$DB = new PDO('mysql:host='.$hostname.'dbname='.$dbName,$user,$password);
			echo "La connexion a été établie !";
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		$pseudo = $_POST['login'];
		$mdp = $_POST['password'];

		$result = $DB->prepare("SELECT NOM,PRENOM FROM USERS WHERE pseudo='$pseudo' and mdp='$mdp'");
		$result->execute();
		$nbLignes = $result->rowCount();
		$identites = $result->fetchAll();
		$identite = $identites[0];
		$nom = $identite['NOM'];
		$prenom = $identite['PRENOM'];
		if ($nbLignes ==  1) {
			print "Connection OK !";
			header("Location: ../bienvenue.php?nom=$nom&prenom=$prenom");
		} else {
			print "erreur connexion";
			header("Location: ../index.php?err=badlogin");
		}
		?>



	</div>
</body>
</html>