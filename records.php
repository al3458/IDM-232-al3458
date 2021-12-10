<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($customers)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td><a href="edit.php?id=' . $row['id'] . '">' . $row['title'] . '</a></td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>

  <a href="categories.php">Back to Categories</a>