<!DOCTYPE html>
<html lang="en">

<head>
	<title>Add New Data</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="normalize.css">
</head>
 
<body>

<div class="topnav">
        <a href="index.html">Home</a>
        <a href="category.html">Categories</a>
        <a href="admin.html">Admin</a>
        <form id="src" action="search.html"><input type="text" placeholder="Search.."></form>
      </div>

      <h1 id="title">All Recipes</h1>

      <hr class="rounded"> 
	<center>
		<h1>Create New Recipe</h1>

		<form action="insert.php" method="post">

    <!-- <p>
				<label for="id">ID:</label>
				<input type="number" name="id" id="id">
			</p> -->



<p>
				<label for="title">title:</label>
				<input type="text" name="title" id="title">
			</p>

			
<p>
				<label for="notes">notes:</label>
				<input type="text" name="notes" id="notes">
			</p>

			
<p>
				<label for="ingredients">ingredients:</label>
				<input type="text" name="ingredients" id="ingredients">
			</p>


<p>
				<label for="description">description:</label>
				<input type="text" name="description" id="description">
			</p>


			
			<input type="submit" value="Submit">
		</form>
	</center>
</body>
<a href="redirect.php">Go Back to Recipes</a>
</html>
