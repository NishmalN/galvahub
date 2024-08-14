<?php
  include(__DIR__ . '/../config/dbcon.php');


  
  // Function to retrieve data from the database
  function getAll($table){
      global $connection;
      $getall_query = "SELECT * FROM $table";
      $getall_query_run = mysqli_query($connection, $getall_query);

      return $getall_query_run;
  }


?>