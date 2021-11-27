<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// $id = $_GET['id']; // get id through query string

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id='$id'";

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

// $conn->close();
?>

<?php

include "connect.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from recipes where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $title = $_POST['title'];
    $notes = $_POST['notes'];
    $ingredients = $_POST['ingredients'];
    $directions = $_POST['directions'];
	
    $edit = mysqli_query($conn,"update recipes set title='$title', Notes='$notes', Ingredients='$ingredients', Directions='$directions' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        // header("location:redirect.php"); // redirects to all records page
        // exit;
        echo "<script type='text/javascript'> document.location = 'redirect.php'; </script>";
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="title" value="<?php echo $data['title'] ?>" placeholder="Enter Title">
  <input type="text" name="notes" value="<?php echo $data['notes'] ?>" placeholder="Enter Notes">
  <input type="text" name="ingredients" value="<?php echo $data['ingredients'] ?>" placeholder="Enter Ingredients">
  <input type="text" name="directions" value="<?php echo $data['directions'] ?>" placeholder="Enter Directions">
  <input type="submit" name="update" value="Update">
</form>

<a href="redirect.php">  
     <button>Go Back</button>  
   </a>