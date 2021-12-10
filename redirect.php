<!DOCTYPE html>
<html>
<head>
  <title>Admin | All Recipes</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>

<h2>All Recipes</h2>
<hr>

<a href="index.php">Back</a>
<table class="mainTbl" border="2">
  <tr>
    <td>ID</td>
    <td>Title</td>
    <td>Notes</td>
    <td>Image</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "connect.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from recipes"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['title']; ?></td>
    <td><?php echo $data['notes']; ?></td>

    <?php
    echo "<td style='background: url(\"" . $data['foodImage'] . "\"); background-size: cover; background-position: center;'></td>";
    ?>
    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
