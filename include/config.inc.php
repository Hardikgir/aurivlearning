<?php 
/*
	$baseUrl = "https://mrinvito.com/php/aurivlearning/";
    $siteurl ="https://mrinvito.com/php/aurivlearning/"; //live
    define('DB_USER', "rushi2hz_auriv"); //db user
	define('DB_PASSWORD', "al@2021"); //db password
	define('DB_DATABASE', "rushi2hz_alearningdb"); //database name
	define('DB_SERVER', "localhost"); //db server
*/
    $baseUrl = "http://localhost/aurivlearning/";
    $siteurl ="http://localhost/aurivlearning/"; //local
	define('DB_USER', "root"); //db user
	define('DB_PASSWORD', ""); //db password
	define('DB_DATABASE', "aurivlearningdb"); //database name
	define('DB_SERVER', "localhost"); //db server
	
	try{	 	
	 	$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or die(mysqli_error());
	}catch(Exception $e){
	 	echo "Caught exception: " . $e->getMessage() . "\n";
	 	exit;
	}
?>