<?php
session_start();

include ('functions/function.php');
 

?>

<!DOCTYPE html>
<html lang="en">
<div class="container">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
      Admin
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/material-dashboard.min.css?v=3.0.0" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- alertify js -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css" />


  </head>

  <body class="g-sidenav-show  bg-gray-200"></body>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-5">
            <div class="card rounded-3 text-black">

              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">

                  <h4 class="mt-1 mb-5 pb-1">Login</h4>
                </div>

                <form method="POST" action="connect.php">
                  <p>Please login to your account</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="username" class="form-control"
                      placeholder="Phone number or email address" />
                    <label class="form-label" for="username">Username</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button type="submit" class="btn btn-primary mb-2" name="login_btn">Confirm</button>
                    <!-- <input type="submit" valu="submit"> -->
                  </div>

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
</div>
</section>


