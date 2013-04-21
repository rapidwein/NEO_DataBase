<?php
	include_once("config.lib.php");
	/*	
	if(!isset($_SESSION['emailId']))
		header('Location: ../');*/
		
	$fullName = mysql_real_escape_string($_POST["fullName"]);
	$emailId = mysql_real_escape_string($_POST["emailId"]);
	$password = mysql_real_escape_string($_POST["regPassword"]);
	$confPassword = mysql_real_escape_string($_POST["confPassword"]);
	$background = mysql_real_escape_string($_POST["background"]);
	
	if(!($fullName&&$emailId&&$password&&$confPassword&&$background)){
		echo "All fields need to filled!";
		exit;
	}
	
	if(preg_match("/^[0-9]+[.-]/",$fullName) == 1){
		echo "Invalid Name";
		exit;
	}
	
	if(preg_match("/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/",$emailId)==1){
		echo "Invalid Email-Id";
		exit;
	}
		
	$query = "SELECT * FROM users";
	$result = mysql_query($query);
	
	while($info = mysql_fetch_array($result)){
		if($info['emailId'] == $emailId){
			echo "Email Id already exists!";
			exit;
		}
	}
		
	if(strcmp($confPassword,$password)!=0){
		echo "Passwords don't match!";
		exit;
	}
	else{
		$password = md5($password);
		$query = "INSERT INTO users (emailId, fullName, password, background) VALUES ('".$emailId."', '".$fullName."','".$password."','".$background."')";
		mysql_query($query);
		$_SESSION['emailId'] = $emailId;
		$_SESSION['views'] = 1;
		echo "Success!";
		exit;
	}	
?>
