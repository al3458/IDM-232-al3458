<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "local_idm232";

// $id = $_GET['id']; // get id through query string

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // sql to delete a record
// $sql = "DELETE FROM recipes WHERE id='$id'";

// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }

// $conn->close();
?>

<?php

include "connect.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from recipes where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    // header("location:redirect.php"); // redirects to all records page
    // exit;	
    echo "<script type='text/javascript'> document.location = 'redirect.php'; </script>";
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>