<?php 
	// functions.php
	// siia tulevad funktsioonid, kõik mis seotud AB'iga
	
	function welcomeUserOne($name) {
		echo "Tere ".$name;
	}
	
	function welcomeUserTwo($name) {
		return "Tere ".$name;
	}
	
	welcomeUserOne("Juku");
	welcomeUserOne("Mari");
	
	echo welcomeUserTwo("Juhan");
	
	$welcome_user = welcomeUserTwo("Romil");
	echo $welcome_user;
	
?>