<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="pages/connexion.php" method="post">
		<p>Entrez votre login :
		   <input type="text" name="login" size="20" required /></p>
		<p>Entrez votre mot de passe : 
		   <input type="password" name="password" size="20" required /></p>
		   <?php 
		   if (strcmp($_REQUEST['err'],'badlogin') == 0) {
		   	echo "mauvais identifiants";
		   }
		   ?><br>
		<input type="submit" value="Envoyer" />
	</form>
</body>
</html>