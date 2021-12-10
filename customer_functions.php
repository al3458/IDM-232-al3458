<?php

  /**
   * get all customers
   *
   * @return mysqli_result
   */
  function get_customers()
  {
      global $conn;
      $query = 'SELECT * ';
      $query .= 'FROM recipes';
      $result = mysqli_query($conn, $query);

      if ($result && $result->num_rows > 0) {
          $customers = $result;
      } else {
          $customers = null;
      }

      return $customers;
  }

  /**
   * Search customers
   *
   * @param string $keyword search word
   * @return mysqli_result
   */
  function search_customer_with_keyword($keyword)
  {
      global $conn;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM recipes ';
      $query .= ' WHERE ';
      $query .= "title LIKE '%" . $keyword . "%'";
      $query .= "OR notes LIKE '%" . $keyword . "%' ";
      $query .= "OR ingredients LIKE '%" . $keyword . "%' ";
      $query .= "OR directions LIKE '%" . $keyword . "%'";

      $result = mysqli_query($conn, $query);
      if ($result && $result->num_rows > 0) {
          $results = $result;
      } else {
          $results = null;
      }
      return $results;
    }
