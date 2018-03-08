<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>pages-includes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!--va aller chercher le contenu menu dans fichier menu.php-->	
	<?php include("menu.php");?>
<!--va aller chercher le contenu header dans le fichier header.php-->	
	<?php include("header.php");?>
	
	<!--BODY start-->
	<form method="post">
		
		<label for="field-name">Votre prénom</label>
		<input type="text" id="field-name" name="firstname" placeholder="John" required/><br>
		<label for="mail">Votre mail</label>
		<input type="text" id="mail" name="email" placeholder="@" required/><br>
		<input type="submit" value="Valider">
	</form>
	<!-- <?php
	//if(isset($_POST['valider'])){
    //$firstname=$_POST['firstname'];
    //$email=$_POST['email'];
   
	//echo '<p>firstname : <p>',$firstname;
	
	//echo '<p>email : <p>',$email;
	//?> -->
	<!--BODY end-->
<!-- va chercher le contenu dans le fichier footer.php-->	
	<?php include("footer.php");?>

</body>
</html>

