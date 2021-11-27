<!-- <!DOCTYPE html> -->
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		// $conn = mysqli_connect("localhost", "root", "root", "local_idm232");
        include_once 'connect.php'; // Using database connection file here
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
		$title = $_REQUEST['title'];
		$notes = $_REQUEST['notes'];
		$ingredients = $_REQUEST['ingredients'];
		$description = $_REQUEST['description'];
		
		// Performing insert query execution
		// here our table name is recipes
		$sql = "INSERT INTO recipes VALUES (null,
			'$title','$notes','$ingredients','$description')";
		
		if(mysqli_query($conn, $sql)){
			// header("Location: redirect.php");
			echo "<script type='text/javascript'> document.location = 'redirect.php'; </script>";
		} 
        else{
			echo "ERROR: Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
