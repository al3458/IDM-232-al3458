<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form

    //mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "root";
	$mysql_database = "local_idm250";
    
	$title = $_POST["title"]; //set PHP variables like this so we can use them anywhere in code below
	$notes = $_POST["notes"];
	$ingredients = $_POST["ingredients"];
    $directions = $_POST["directions"];

    //Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO users_data (user_name, user_email, user_message) VALUES(?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sss', $title, $notes, $ingredients, $directions); //bind values and execute insert query
	
	if($statement->execute()){
		print "Added " . $title;
	}else{
		print $mysqli->error; //show mysql error if any
	}
	
}
?>