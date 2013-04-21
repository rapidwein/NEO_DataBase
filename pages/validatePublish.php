<?php
	include_once("config.lib.php");
				
	$neoName = mysql_real_escape_string($_POST["neoName"]);
	$year = mysql_real_escape_string($_POST["year"]);
	$month = mysql_real_escape_string($_POST["month"]);
	$day = mysql_real_escape_string($_POST["day"]);
	$ra = mysql_real_escape_string($_POST["ra"]);
	$decl = mysql_real_escape_string($_POST["decl"]);
	$radius = mysql_real_escape_string($_POST["radius"]);
	$limit = mysql_real_escape_string($_POST["limit"]);
	$obs = mysql_real_escape_string($_POST["obs"]);
//	$_FILES["file"]

	if(!($neoName&&$year&&$month&&$day&&$ra&&$decl&&$radius&&$limit&&$obs)){
		echo "All fields need to filled!";
		exit;
	}
	else{
		$query = "INSERT INTO NEO (TempDesign, Date, password, background) VALUES ('".$emailId."', '".$fullName."','".$password."','".$background."')";
		mysql_query($query);
		$_SESSION['emailId'] = $emailId;
		$_SESSION['views'] = 1;
		echo "Success!";
		exit;
	}	
?>
