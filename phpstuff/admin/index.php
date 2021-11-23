<?php 

$query .= 'SELECT * ';
$query .= 'FROM recipes';
$results = mysqli_query($db_connection, $query)
?>


<div class="container">
    <h1>Recipes</h1>
    <a class="btn btn-primary" href="create.php">Create</a>
    <?php  include $_SERVER['DOCUMENT_ROOT'] . 'alert.php'; ?>
    <?php 
    if ($results && $results->num_rows > 0) {
        include $_SERVER['DOCUMENT_ROOT'] . '/comonents/list-users.php';

    } else {
        echo '<p>There are currently no users in the database</p>';
    }


    ?>
</div>
