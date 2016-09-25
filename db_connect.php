<?php

function dB_connect(){
	global $db;
	$host = "127.0.0.1";
	$user = "root";
	$pass = "owen4450";
	$dbname = "wine_db";
	
	$db = new mysqli($host, $user, $pass, $dbname);
	
	if(mysqli_connect_errno()){
		printf("connect failed: %s\n ", mysqli_connect_error());
		exit();
	}

}


?>