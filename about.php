<?php
session_start();

?>


<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from theme7x.com/shapen/about-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:01:10 GMT -->

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
    <title>About|Project 2</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif] -->

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

        $about = getAll("about");
        if (mysqli_num_rows($about) > 0) {
            $data = mysqli_fetch_assoc($about);


            ?>

            <!-- CONTENT START -->
            <div class="page-content">


                <!-- INNER PAGE BANNER -->
                <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
                    style="background-image:url(images/about/<?= $data['about_image'] ?>);">
                    <div class="overlay-main bg-black opacity-07"></div>
                    <div class="container">
                        <div class="mt-bnr-inr-entry">
                            <div class="banner-title-outer">
                                <div class="banner-title-name">
                                    <h2 class="m-b0"><?= $data['About_us'] ?></h2>
                                </div>
                            </div>
                            <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?= $data['button_link'] ?>"><?= $data['button_name'] ?></a></li>
                                    <li><?= $data['About'] ?></li>
                                </ul>
                            </div>

                            <!-- BREADCRUMB ROW END -->
                        </div>
                    </div>
                </div>
                <!-- INNER PAGE BANNER END -->



                <!-- ABOUT COMPANY SECTION START -->
                <div class="section-full p-t80 p-b80 bg-black inner-page-padding ">
                    <div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="mt-separator-outer separator-left">
                                <div class="mt-separator">
                                    <h2 class="text-uppercase sep-line-one "><span
                                            class="font-weight-300 site-text-primary"><?= $data['session1_header'] ?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <div class="section-content ">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <div class="m-about ">
                                        <div class="owl-carousel about-us-carousel">
                                            <!-- COLUMNS 1 -->
                                            <div class="item">
                                                <div class="ow-img">
                                                    <a href="about-1.html"><img
                                                            src="images/about/<?= $data['session1_image'] ?>" alt=""></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="m-about-containt text-white">

                                        <h3 class="font-weight-600"><?= $data['content_header'] ?></h3>
                                        <p><?= $data['session1_content'] ?></p>
                                        <div class="author-info p-t20">

                                            <div class="author-signature">
                                                <img src="images/Signature%2bBlack.png" alt="Signature" width="150" />
                                            </div>

                                            <div class="author-name">
                                                <h4 class="m-t0"><?= $data['sub_header'] ?></h4>
                                                <p><?= $data['commitment'] ?></p>
                                            </div>
                                            <a href="<?= $data['content_button_link'] ?>"
                                                class="site-button btn-effect m-b15"><span><?= $data['content_button_name'] ?></span></a>

                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ABOUT COMPANY SECTION END -->





                <!-- OUR STORY SECTION START -->
                <div class="section-full about-summary-wrap p-t80 p-b50 bg-dark bg-repeat square_shape2 inner-page-padding"
                    style="background-image:url(images/background/bg-6.png)">
                    <div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="mt-separator-outer separator-left">
                                <div class="mt-separator text-white">

                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <div class="section-content our-story">

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="our-story-pic-block">
                                        <div class="mt-media our-story-pic">
                                            <img src="images/about/<?= $data['session2_image1'] ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <div class="mt-box our-story-detail bg-moving bg-cover"
                                        style="background-image:url(images/background/line.png)">
                                        <h4 class="text-uppercase m-b20"><?= $data['title1'] ?></h4>

                                        <p><?= $data['session2_content1'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="our-story-pic-block">
                                        <div class="mt-media our-story-pic">
                                            <img src="images/about/<?= $data['session2_image2'] ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <div class="mt-box our-story-detail bg-moving bg-cover"
                                        style="background-image:url(images/background/line.png)">
                                        <h4 class="text-uppercase m-b20"><?= $data['title2'] ?></h4>

                                        <p><?= $data['session2_content2'] ?></p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>


                </div>
                <!-- OUR STORY SECTION END -->

            </div>
            <!-- CONTENT END -->
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
            <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
       
    </div>

        <!-- LOADING AREA START ===== -->
        <div class="loading-area">
            <div class="loading-box"></div>
            <div class="loading-pic">
                <div class="cssload-loader">Loading</div>
            </div>
        </div>
        <!-- LOADING AREA  END ====== -->

        <!-- STYLE SWITCHER  ======= -->

        <!-- STYLE SWITCHER END ==== -->

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



    </body>


    <!-- Mirrored from theme7x.com/shapen/about-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:01:12 GMT -->

    </html>