<?php 
	//$env="prod";
	$env="dev";
	$dbhost = "localhost";

	$dbname = "id16355055_sparksusers";
	date_default_timezone_set("Asia/Kolkata");
	$dbuser = "id16355055_datauser";
	$dbpass = "UulyEJf7Etze-jGN";
	if($env!="prod"){

	$dbname = "sparksusers";
	$dbuser = "root";
	$dbpass = "";
	}

	$dbtype = "mysql:dbhost=".$dbhost.";dbname=".$dbname;
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	try{
		$db = new PDO($dbtype,$dbuser,$dbpass);
	}
	catch(PDOException $e)
	{
		echo "Error : ".$e->getMessage();
	}

 ?>