<head>
<Script>
            function updateBase64(){
                var file = document.querySelector('input[type=file]')['files'][0];
                var reader = new FileReader();
                var baseString;
                    reader.onloadend = function () {
                    baseString = reader.result;
                    document.getElementById("base64Image").value = baseString;
                    console.log(baseString); 
                };
                reader.readAsDataURL(file);
            }
        </script>
</head>

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
    $imageBase64 = $_POST['base64Image'];
	
    $edit = mysqli_query($conn,"update recipes set title='$title', Notes='$notes', Ingredients='$ingredients', Directions='$directions', foodImage='$imageBase64' where id='$id'");
	
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
<center>
<form method="POST">
  <input type="text" name="title" value="<?php echo $data['title'] ?>" placeholder="Enter Title"> <br>
  <input type="text" name="notes" value="<?php echo $data['notes'] ?>" placeholder="Enter Notes"> <br>
  <input type="text" name="ingredients" value="<?php echo $data['ingredients'] ?>" placeholder="Enter Ingredients"> <br>
  <input type="text" name="directions" value="<?php echo $data['directions'] ?>" placeholder="Enter Directions"> <br>
  <field class="directionsField">
					<label for="fileUpload">Upload Image</label>
					<input type="file" name="fileUpload" onchange="updateBase64()" />
					<input type="hidden" id="base64Image" name="base64Image" />
				</field> <br>
  <input type="submit" name="update" value="Update">
</form>
</center>

<a href="redirect.php">  
     <button>Go Back</button>  
   </a>