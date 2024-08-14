<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from theme7x.com/shapen/post-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:01:30 GMT -->

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Shapen Template | Post image</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- Side Switcher Css-->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>

<body>

    <div class="page-wraper">

        <?php
        include 'includes/navbar.php';
        ?>
        <?php

        $commitment = getAll("commitment");

        if (mysqli_num_rows($commitment) > 0) {
            $data = mysqli_fetch_assoc($commitment);
            ?>
            <!-- CONTENT START -->
            <div class="page-content ">
                <!-- INNER PAGE BANNER -->
                <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
                    style="background-image:url(images/Commitment/<?= $data['Commitment_image'] ?>);">
                    <div class="overlay-main bg-black opacity-07"></div>
                    <div class="container">
                        <div class="mt-bnr-inr-entry">
                            <div class="banner-title-outer">
                                <div class="banner-title-name">
                                    <h2 class="m-b0"><?= $data['banner_name1'] ?></h2>
                                </div>
                            </div>
                            <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?= $data['button_link'] ?>"><?= $data['button_name'] ?></a></li>
                                    <li><?= $data['banner_name2'] ?></li>
                                </ul>
                            </div>

                            <!-- BREADCRUMB ROW END -->
                        </div>
                    </div>
                </div>
                <!-- INNER PAGE BANNER END -->

                <!-- SECTION CONTENT START -->
                <div class="section-full p-tb80 inner-page-padding bg-black">
                    <div class="container">
                        <div class="blog-single-wrap-width">
                            <div class="blog-post date-style-3 blog-detail text-white">
                                <div class="mt-post-media clearfix m-b30">
                                    <ul class="grid-post">
                                        <li>
                                            <div class="portfolio-item">
                                                <img class="img-responsive"
                                                    src="images/Commitment/<?= $data['header_image'] ?>" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <div class="mt-post-title ">
                                    <h3 class="post-title"><?= $data['main_header'] ?></h3>
                                </div>

                                <div class="mt-post-text">
                                    <p><?= nl2br($data['content1']) ?></p>

                                    <p><?= nl2br($data['content2']) ?></p>
                                </div>


                                </blockquote>
                                <p><?= $data['content3'] ?></p>

                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mt-box m-b30">
                                            <div class="mt-media">
                                                <img src="images/Commitment/<?= $data['image1'] ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mt-box m-b30">
                                            <div class="mt-media">
                                                <img src="images/Commitment/<?= $data['image2'] ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mt-box m-b30">
                                            <div class="mt-media">
                                                <img src="images/Commitment/<?= $data['image3'] ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
        } else{
            ?>
            <div style="color:black;">
                <?php
                echo "database connection not working or no data found";
                ?>
            </div>
            <?php
        }
        ?>

                            <?php

                            include 'includes/footer.php';
                            ?>

                            <!-- BUTTON TOP START -->
                            <button class="scroltop"><span class="fa fa-angle-up  relative"
                                    id="btn-vibrate"></span></button>

                        </div>

                        <!-- LOADING AREA START ===== -->
                        <div class="loading-area">
                            <div class="loading-box"></div>
                            <div class="loading-pic">
                                <div class="cssload-loader">Loading</div>
                            </div>
                        </div>
                        <!-- LOADING AREA  END ====== -->


                        <!-- JAVASCRIPT  FILES ========================================= -->
                        <script src="js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
                        <script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
                        <script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
                        <script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
                        <script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
                        <script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
                        <script src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
                        <script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
                        <script src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
                        <script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
                        <script src="js/jquery.owl-filter.js"></script>
                        <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
                        <script src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
                        <script src="js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
                        <script src="js/switcher.js"></script>

                       
                    </div>
                </div>
            </div>
        </div>
    </body>


    <!-- Mirrored from theme7x.com/shapen/post-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:01:33 GMT -->

    </html>