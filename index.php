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
	<div id="firstelement">
		<img class="img" src="css/img/img1.jpg">
		<h1>Accueil</h1>
		<p>Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</p>
	</div>
	<!--BODY end-->
<!-- va chercher le contenu dans le fichier footer.php-->	
	<?php include("footer.php");?>


</body>
</html>

