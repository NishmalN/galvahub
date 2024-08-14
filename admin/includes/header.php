<?php 
  session_start();
  include ('code.php');


  // Check if the user is logged in
    if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
      // Redirect to login page if the user is not logged in
      redirect("login.php", "Please log in first.");
    }

    // Display any messages set during the redirect
    if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
      unset($_SESSION['message']); // Clear the message after displaying it
    }
  include('functions/function.php');
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>
    Admin
  </title>
  
 
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.min.css?v=3.0.0" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- alertify js -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>


</head>

<body class="g-sidenav-show  bg-gray-200"></body>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <?php include('sidebar.php'); ?>
   
  <?php include('navbar.php'); ?> 