<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Recipe</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['title'] . '</td>';
              echo '<td><a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a></td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>