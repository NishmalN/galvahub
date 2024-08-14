<?php
session_start();

?>


<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from theme7x.com/shapen/contact-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:00:44 GMT -->

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
    <title>Contact|project 2</title>

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

<body id="bg">



    <div class="page-wraper">



        <!-- CONTENT START -->
        <div class="page-content">
            <?php
            include 'includes/navbar.php';

            $contact = getAll("contact");

            if (mysqli_num_rows($contact) > 0) {
                $data = mysqli_fetch_assoc($contact);
                ?>
                <!-- INNER PAGE BANNER -->
                <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
                    style="background-image:url(images/Contact/<?= $data['Contact_image'] ?>);">
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

                <!-- SECTION CONTENTG START -->
                <div class="section-full p-tb80 inner-page-padding bg-black">
                    <!-- LOCATION BLOCK-->
                    <div class="container">

                        <!-- GOOGLE MAP & CONTACT FORM -->
                        <div class="section-content">
                            <!-- CONTACT FORM-->
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <form class="contact-form cons-contact-form" method="post"
                                        action="https://theme7x.com/shapen/form-handler.php">
                                        <div class="contact-one m-b30">

                                            <!-- TITLE START -->
                                            <div class="section-head">
                                                <div class="mt-separator-outer separator-left">
                                                    <div class="mt-separator">
                                                        <h2 class="text-uppercase sep-line-one "><span
                                                                class="font-weight-300 site-text-primary"><?= $data['header'] ?></span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- TITLE END -->
                                            <div class="contact-one-inner">
                                                <div class="form-group">
                                                    <input name="username" type="text" required class="form-control"
                                                        placeholder="Name">
                                                </div>

                                                <div class="form-group">
                                                    <input name="email" type="text" class="form-control" required
                                                        placeholder="Email">
                                                </div>

                                                <div class="form-group">
                                                    <textarea name="message" rows="4" class="form-control " required
                                                        placeholder="Message"></textarea>
                                                </div>

                                                <div class="text-right">
                                                    <button name="submit" type="submit" value="Submit"
                                                        class="site-button btn-effect">submit

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="contact-info m-b30">
                                        <!-- TITLE START -->
                                        <div class="section-head">
                                            <div class="mt-separator-outer separator-left">
                                                <div class="mt-separator">
                                                    <h2 class="text-uppercase sep-line-one "><span
                                                            class="font-weight-300 site-text-primary">Contact Info</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->
                                        <div class="contact-one-inner-right site-bg-dark text-white">
                                            <div class="mt-icon-box-wraper left p-b40">
                                                <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                                <div class="icon-content">
                                                    <h5 class="m-t0 font-weight-500">Phone number</h5>
                                                    <p><?= $data['phone_number'] ?></p>
                                                </div>
                                            </div>

                                            <div class="mt-icon-box-wraper left p-b40">
                                                <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                                <div class="icon-content">
                                                    <h5 class="m-t0 font-weight-500">Email address</h5>
                                                    <p><?= $data['email_address'] ?></p>
                                                </div>
                                            </div>

                                            <div class="mt-icon-box-wraper left">
                                                <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                                <div class="icon-content">
                                                    <h5 class="m-t0 font-weight-500">Address info</h5>
                                                    <p><?= $data['address_info'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gmap-outline">
                            <div class="google-map" style="width: 100%">
                                <iframe height="460"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5543.044383174594!2d-73.98517634822427!3d40.753964399662806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a938897f87%3A0x77a53418bbd56c17!2s34%20St%20-%20Herald%20Sq!5e0!3m2!1sen!2sin!4v1658249652295!5m2!1sen!2sin"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION CONTENT END -->
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
        </div>
        <!-- CONTENT END -->

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


<!-- Mirrored from theme7x.com/shapen/contact-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:00:45 GMT -->

</html>