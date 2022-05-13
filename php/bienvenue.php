<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$nom = $_REQUEST['nom'];
	$prenom = $_REQUEST['prenom'];
	echo "<p>Bienvenue, <strong>" . $nom . " " . $prenom ."</strong> </p>";
	?>
</body>
</html>