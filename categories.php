<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="category.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Categories</title>
</head>
<body>

<div class="topnav">
        <a href="index.html">Home</a>
        <a href="categories.php">Categories</a>
        <a href="admin.html">Admin</a>
      </div>
    <?php
    include_once 'customer_functions.php';
    include_once 'connect.php';
    // If Keyword param exist, update query to show search results instead of everything
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $customers = search_customer_with_keyword($keyword);
} else {
    // Build Query
    $customers = get_customers();
}

?>
<div class="container">

    <form class="search-form" action="" method="GET">
        <label for="">Search</label>
        <input type="text" name="keyword" placeholder="Search Your Category"
            value="<?php echo @$_GET['keyword']; ?>">
        <input type="submit" value="submit">
    </form>

    <?php
    //Check if the results returned anything
    if ($customers) { 
        include 'records.php';
    } else {
        echo '<p>Something does not match!</p>';
        echo "<a href='categories.php'>Back</a>";
    }
    ?>
</div>

</body>
</html>
<?php

