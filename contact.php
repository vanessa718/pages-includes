<!--BODY start-->
<?php
	include ("menu.php");
	include("header.php");
	include ('footer.php');
	
?>
	<img class="img" src="css/img/img3.jpg">
	<?php title("Contact");?>
<form method="post">
	<label for="field-name">Prénom</label>
	<input type="text" id="field-name" name="firstname" placeholder="John" required/><br>
	<label for="mail">Mail</label>
	<input type="text" id="mail" name="email" placeholder="@" required/><br>
	<input type="submit" class="submit" value="Valider">
</form>

<!--BODY end-->

