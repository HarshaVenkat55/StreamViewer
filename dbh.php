<?php
	
	$host = "ec2-107-21-93-132.compute-1.amazonaws.com";
	$user = "cdigzimloywydn";
	$password = "c24382245c3c5a09b728dd4e8d19fd05474b0bce163067e195097a1311b9afa9";
	$dbname = "dco0f47foupoaj";
	$port = "5432";

	try{
		//Set DSN data source name
		$dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";

		//create a PDO instance
		$conn = new PDO($dsn, $user, $password);
		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch (PDOException $e){
		echo 'Connection failed: ' . $e->getMessage();
	}


?>