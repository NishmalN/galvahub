<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from theme7x.com/shapen/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:00:47 GMT -->

<head>
  <!-- META -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="description" content="" />

  <!-- FAVICONS ICON -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- PAGE TITLE HERE -->
  <title>project 2</title>

  <!-- MOBILE SPECIFIC -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- BOOTSTRAP STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <!-- FONTAWESOME STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
  <!-- OWL CAROUSEL STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
  <!-- MAGNIFIC POPUP STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css" />
  <!-- LOADER STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="css/loader.min.css" />
  <!-- FLATICON STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="css/flaticon.min.css" />
  <!-- MAIN STYLE SHEET -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- Color Theme Change Css -->
  <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css" />
  <!-- Side Switcher Css-->
  <link rel="stylesheet" type="text/css" href="css/switcher.css" />

  <!-- REVOLUTION SLIDER CSS -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css" />

  <!-- REVOLUTION NAVIGATION STYLE -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />
</head>

<body>
  <div class="page-wraper">

    <?php
    include 'includes/navbar.php';
    ?>

    <!-- CONTENT START -->
    <div class="page-content">
      <!-- SLIDER START -->
      <?php

      $slider = getAll("slider");

      if (mysqli_num_rows($slider) > 0) {
        $data = mysqli_fetch_assoc($slider);
        ?>

        <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header">
          <div id="rev_slider_one" class="rev_slider fullwidthabanner" style="display: none" data-version="5.4.3.1">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-901" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                data-thumb="images/slider/<?= $data['slider_1_image'] ?>" data-rotate="0" data-fstransition="fade"
                data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1=""
                data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/slider/<?= $data['slider_1_image'] ?>" alt="" class="rev-slidebg" data-bgfit="cover"
                  data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" />
                <!-- LAYERS -->
                <!-- LAYER NR. 1 [ for overlay ] -->
                <!-- <div class="tp-caption tp-shape tp-shapewrapper" id="slide-901-layer-0"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                  data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                  data-responsive_offset="off" data-responsive="off" data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 1;
                    background-color: rgba(0, 0, 0, 0);
                    border-color: rgba(0, 0, 0, 0);
                    border-width: 0px;
                  "></div> -->

                <!-- LAYER NR. 4 [ for title ] -->
                <div class="tp-caption tp-resizeme" id="slide-901-layer-2" data-x="['left','left','left','left']"
                  data-hoffset="['50','130','130','130']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['-120','-120','-120','-120']" data-fontsize="['72','72','62','52']"
                  data-lineheight="['82','82','72','62']" data-width="['700','700','700','500']"
                  data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']"
                  data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 13;
                    white-space: normal;
                    font-weight: 700;
                    color: #ffffff;
                    border-width: 0px;
                    font-family: 'Poppins', sans-serif;
                    text-transform: uppercase;
                  ">
                  <div><?= $data['slider_1_header'] ?></div>
                </div>

                <!-- LAYER NR. 5 [ for block] -->

                <!-- LAYER NR. 5 [ for block] -->
                <div class="tp-caption tp-resizeme" id="slide-901-layer-4" data-x="['left','left','left','left']"
                  data-hoffset="['50','130','130','130']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['0','0','0','20']" data-fontsize="['20','20','28','26']"
                  data-lineheight="['28','28','48','38']" data-width="['600','600','700','500']"
                  data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']"
                  data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 13;
                    white-space: normal;
                    font-weight: 500;
                    color: #ffffff;
                    border-width: 0px;
                    font-family: 'Poppins', sans-serif;
                  ">
                  <?= $data['content_1'] ?>
                </div>
                <!-- <br><br> -->

                <!-- LAYER NR. 6 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme" id="slide-901-layer-5" data-x="['left','left','left','left']"
                  data-hoffset="['50','130','130','130']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['90','90','90','130']" data-lineheight="['none','none','none','none']"
                  data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                  data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                  style="z-index: 100; text-transform: uppercase; margin: 10px">
                  <a href="<?= $data['slider_1_button1_link'] ?>"
                    class="site-button-secondry btn-effect"><?= $data['slider_1_button1_name'] ?></a>
                </div>

                <!-- LAYER NR. 6 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme" id="slide-901-layer-6" data-x="['left','left','left','left']"
                  data-hoffset="['260','330','330','330']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['90','90','90','130']" data-lineheight="['none','none','none','none']"
                  data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                  data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                  style="z-index: 100; text-transform: uppercase; margin: 10px">
                  <a href="<?= $data['slider_1_button2_link'] ?>"
                    class="site-button btn-effect"><?= $data['slider_1_button2_name'] ?></a>
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-902" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                data-thumb="images/slider/<?= $data['slider_2_image'] ?>" data-rotate="0" data-fstransition="fade"
                data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1=""
                data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/slider/<?= $data['slider_2_image'] ?>" alt="" class="rev-slidebg" data-bgfit="cover"
                  data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" />
                <!-- LAYERS -->
                <!-- LAYER NR. 1 [ for overlay ] -->
                <div class="tp-caption tp-shape tp-shapewrapper" id="slide-902-layer-0"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                  data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                  data-responsive_offset="off" data-responsive="off" data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 1;
                    background-color: rgba(0, 0, 0, 0);
                    border-color: rgba(0, 0, 0, 0);
                    border-width: 0px;
                  "></div>

                <!-- LAYER NR. 4 [ for title ] -->
                <div class="tp-caption tp-resizeme" id="slide-902-layer-2" data-x="['left','left','left','left']"
                  data-hoffset="['50','130','130','130']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['-120','-120','-120','-120']" data-fontsize="['72','72','62','52']"
                  data-lineheight="['82','82','72','62']" data-width="['700','700','700','500']"
                  data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']"
                  data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 13;
                    white-space: normal;
                    font-weight: 700;
                    color: #ffffff;
                    border-width: 0px;
                    font-family: 'Poppins', sans-serif;
                    text-transform: uppercase;
                  ">
                  <div><?= $data['slider_2_header'] ?></div>
                </div>

                <!-- LAYER NR. 5 [ for block] -->

                <!-- LAYER NR. 5 [ for block] -->
                <div class="tp-caption tp-resizeme" id="slide-902-layer-4" data-x="['left','left','left','left']"
                  data-hoffset="['50','130','130','130']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['0','0','0','20']" data-fontsize="['20','20','28','26']"
                  data-lineheight="['28','28','48','38']" data-width="['600','600','700','500']"
                  data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']"
                  data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 13;
                    white-space: normal;
                    font-weight: 500;
                    color: #ffffff;
                    border-width: 0px;
                    font-family: 'Poppins', sans-serif;
                  ">
                  <?= $data['content_2'] ?>
                </div>

                <!-- LAYER NR. 6 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme" id="slide-902-layer-5" data-x="['left','left','left','left']"
                  data-hoffset="['50','130','130','130']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['90','90','90','130']" data-lineheight="['none','none','none','none']"
                  data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                  data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                  style="z-index: 100; text-transform: uppercase; margin: 10px">
                  <a href="<?= $data['slider_2_button1_link'] ?>"
                    class="site-button-secondry btn-effect"><?= $data['slider_2_button1_name'] ?></a>
                </div>

                <!-- LAYER NR. 6 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme" id="slide-902-layer-6" data-x="['left','left','left','left']"
                  data-hoffset="['260','330','330','330']" data-y="['middle','middle','middle','middle']"
                  data-voffset="['90','90','90','130']" data-lineheight="['none','none','none','none']"
                  data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                  data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                  style="z-index: 100; text-transform: uppercase; margin: 10px">
                  <a href="<?= $data['slider_2_button2_link'] ?>"
                    class="site-button btn-effect"><?= $data['slider_2_button2_name'] ?></a>
                </div>
              </li>

              <!-- SLIDE 3-->

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important"></div>
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
      <!-- SLIDER END -->



      <!-- ABOUT COMPANY START -->


      <div 
      <?php
      $home_page = getAll("home_page");
      if (mysqli_num_rows($home_page) > 0) {
        $data = mysqli_fetch_assoc($home_page);
        ?> 
        class="section-full bg-black"
          style="background-image: url(images/black.jpg)">
          <div class="services-half-section-top">
            <div class="container">
              <!-- TITLE START -->
              <div class="section-head">
                <div class="mt-separator-outer separator-left text-wh">
                  <div class="mt-separator">
                   
                      <span class="font-weight-300 site-text-primary"><?= $data['header'] ?></span>

                    </h2>
                  </div>
                 </div>
              </div>
              <!-- TITLE END -->

              <div class="section-content">
                <div class="row">
                  <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="owl-carousel about-home about-home-v2 owl-dots-bottom-left">
                      <!-- COLUMNS 1 -->
                      <div class="item">
                        <div class="mt-img-effect zoom-slow">
                          <a href="about.php"><img src="images/home/<?= $data['about_image'] ?>" alt="" /></a>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="about-home-right about-right-v2 site-bg-primary text-black p-a30">
                      <h3 class="m-t0">
                        <span class="font-weight-100"></span> <?= $data['content_header'] ?>
                      </h3>
                      <p>
                        <strong><?= $data['content'] ?></strong>
                      </p>

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="services-half-section-bottom p-t80 p-b50  bg-secondry bg-cover bg-center bg-no-repeat"
            style="background-image:url(images/black.jpg)">

            <div class="container">
              <div class="section-content">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="site-text-primary mt-icon-box-wraper left m-b30">
                      <span class="icon-md p-t10">

                    </div>
                  </div>
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
    </div>
    <!-- ABOUT COMPANY END -->

    <!-- CALL US SECTION START -->
    <div class="section-full p-tb80 overlay-wraper bg-center bg-parallax bg-cover" data-stellar-background-ratio="0.5"
      style="background-image:url(images/home/<?= $data['contact_image'] ?>)">


      <div class="overlay-main bg-black opacity-07"></div>
      <div class="container">
        <div class="section-content">
          <div class="call-us-section text-center text-white">
          <?php
    $contact = getAll("contact");
    if (mysqli_num_rows($contact) > 0) {
        $data = mysqli_fetch_assoc($contact);
        ?>
            <h4 class="m-b15">Let's work together</h4>
            <h2 class="call-us-number m-b15 m-b0"><?= $data['phone_number'] ?></h2>
            <h4 class="call-us-address m-t0 m-b20">
            <?= $data['address_info'] ?>
            </h4>
            <a href="contact.php" class="site-button btn-effect">Contact Us</a>
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
        </div>
      </div>
    </div>
    <!-- CALL US SECTION END -->


    <!-- OUR MISSION START -->
    <div
      class="section-full mobile-page-padding mission-outer-section  p-t80 p-b30 bg-black bg-no-repeat bg-right-center">
      <div class="section-content">
      <?php
      $home_page = getAll("home_page");
      if (mysqli_num_rows($home_page) > 0) {
        $data = mysqli_fetch_assoc($home_page);
        ?> 
        <div class="container">
          <!-- TITLE START -->
          <div class="section-head">
            <div class="mt-separator-outer separator-center">
              <div class="mt-separator">
                <h2 class="text-uppercase sep-line-one "><span
                    class="font-weight-300 site-text-primary"><?= $data['header_2'] ?></span></h2>
              </div>
            </div>
          </div>
          <!-- TITLE END -->

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="mission-left bg-white m-b30 p-a30 bg-no-repeat bg-bottom-left"
                style="background-image:url(images/home/<?= $data['mission1_image'] ?>);">
                <div class="text-black">
                <p><?= $data['mission_content'] ?></p>
                  </div>
                
                <div class="text-right">
                  <a href="<?= $data['service_button_link'] ?>" class="site-button-link"
                    data-hover="Read More"><?= $data['service_button_name'] ?><i
                      class="fa fa-angle-right arrow-animation"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="mission-mid bg-no-repeat bg-cover m-b30"
                style="background-image:url(images/home/<?= $data['mission2_image'] ?>);"></div>
            </div>

            <div class="col-lg-4 col-md-12">
              <div class="contact-home1-left site-bg-dark p-a30 m-b0">
                <h3 class="text-white m-t0"><span class="font-weight-100">Get In</span> Touch</h3>
                <form class="cons-contact-form2 form-transparent" method="post"
                  action="https://theme7x.com/shapen/form-handler2.php">

                  <div class="input input-animate">
                    <label for="name">Name</label>
                    <input type="text" name="username" id="name" required>
                    <span class="spin"></span>
                  </div>

                  <div class="input input-animate">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <span class="spin"></span>
                  </div>

                  <div class="input input-animate">
                    <label for="Phone">Phone</label>
                    <input type="text" name="phone" id="Phone" required>
                    <span class="spin"></span>
                  </div>

                  <div class="input input-animate">
                    <label for="message">Textarea</label>
                    <textarea name="message" id="message" required></textarea>
                    <span class="spin"></span>
                  </div>

                  <div class="text-center p-t10">
                    <button type="submit" class="site-button btn-effect ">
                      Submit Now
                    </button>
                  </div>
                </form>
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
      </div>
      <div class="hilite-title text-left p-l50 text-uppercase text-pop-up-top">
        <strong><?= $data['mission_button_name'] ?></strong>
      </div>
    </div>
    <!-- OUR MISSION  END -->


   





  </div>
  <!-- CONTENT END -->

  <?php
  include 'includes/footer.php';
  ?>

  <!-- BUTTON TOP START -->
  <button class="scroltop">
    <span class="fa fa-angle-up relative" id="btn-vibrate"></span>
  </button>
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
  <script src="js/jquery-3.6.1.min.js"></script>
  <!-- JQUERY.MIN JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- BOOTSTRAP.MIN JS -->
  <script src="js/popper.min.js"></script>
  <!-- POPPER.MIN JS -->
  <script src="js/magnific-popup.min.js"></script>
  <!-- MAGNIFIC-POPUP JS -->
  <script src="js/waypoints.min.js"></script>
  <!-- WAYPOINTS JS -->
  <script src="js/counterup.min.js"></script>
  <!-- COUNTERUP JS -->
  <script src="js/waypoints-sticky.min.js"></script>
  <!-- COUNTERUP JS -->
  <script src="js/isotope.pkgd.min.js"></script>
  <!-- MASONRY  -->
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <!-- MASONRY  -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- OWL  SLIDER  -->
  <script src="js/jquery.owl-filter.js"></script>
  <script src="js/custom.js"></script>
  <!-- CUSTOM FUCTIONS  -->
  <script src="js/shortcode.js"></script>
  <!-- SHORTCODE FUCTIONS  -->
  <script src="js/jquery.bgscroll.js"></script>
  <!-- BACKGROUND SCROLL -->
  <script src="js/switcher.js"></script>
  <!-- REVOLUTION JS FILES -->

  <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

  <!-- REVOLUTION SLIDER SCRIPT FILES -->
  <script src="js/rev-script-2.js"></script>
</body>

<!-- Mirrored from theme7x.com/shapen/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:00:57 GMT -->

</html>