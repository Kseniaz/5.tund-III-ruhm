<?php
	require_once("functions.php");
	//data.php
	// siia pääseb ligi sisseloginud kasutaja
	//kui kasutaja ei ole sisseloginud,
	//siis suuunan data.php lehele
	if(!isset($_SESSION["logged_in_user_id"])){
		header("Location: login.php");
	}
	
	//kasutaja tahab välja logida
	if(isset($_GET["logout"])){
		//aadressireal on olemas muutuja logout
		
		//kustutame kõik session muutujad ja peatame sessiooni
		session_destroy();
		
		header("Location: login.php");
	}
	
	$number_plate = $color = "";
	$number_plate_error = $color_error = "";
	
	// keegi vajutas nuppu numbrimärgi lisamiseks
	if(isset($_POST["add_plate"])){
		
		//echo $_SESSION["logged_in_user_id"];
		
		// valideerite väljad
		// mõlemad on kohustuslikud
		//salvestate ab'i fn kaudu addCarPlate
		
	}
	

?>
<p>
	Tere, <?=$_SESSION["logged_in_user_email"];?> 
	<a href="?logout=1"> Logi välja <a> 
</p>


<h2>Lisa autonumbrimärk</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<label for="number_plate" >Auto numbrimärk</label><br>
	<input id="number_plate" name="number_plate" type="text" value="<?php echo $number_plate; ?>"> <?php echo $number_plate_error; ?><br><br>
	<label for="color">Värv</label><br>
	<input id="color" name="color" type="text" value="<?php echo $color; ?>"> <?php echo $color_error; ?><br><br>
	<input type="submit" name="add_plate" value="Salvesta">
</form>

