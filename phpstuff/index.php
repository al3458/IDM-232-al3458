
<?php
	require "includes/db.php";

	// Step 2: Perform Database Query
	$table = "recipes";
	$query = "SELECT * FROM {$table}";
	$result = mysqli_query($connection, $query);

	// Check there are no errors with our SQL statement
	if (!$result) {
			die ("Database query failed.");
	}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP DB Example</title>
	<link rel="stylesheet" href="screen.css">
</head>
<body>

	<div class="grid">
		<?php
			while ($row = mysqli_fetch_assoc($result)) {
		?>

			<div class="project">
                <p><?php echo $row['title']; ?></p>
                <p><?php echo $row['notes']; ?></p>
                <p><?php echo $row['ingredients']; ?></p>
				<p><?php echo $row['directions']; ?></p>
			</div>

		<?php
			}

			// Step 4: Release Returned Data
			mysqli_free_result($result);

			// Step 5: Close Database Connection
			mysqli_close($connection);
		?>
	</div>

</body>
</html>
