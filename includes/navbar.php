<?php 
  
  
include ('admin/functions/function.php');

?>
<!-- HEADER START -->
<header class="site-header header-style-1 mobile-sider-drawer-menu">
    <div class="top-bar bg-gray">
       
    <div class="sticky-header main-bar-wraper">
        <div class="main-bar bg-dark">
            <div class="container">
                <div class="logo-header">
                    <?php

                    $extra = getAll("extra");

                    if (mysqli_num_rows($extra) > 0) {
                        $data = mysqli_fetch_assoc($extra);
                        ?>
                        <div class="logo-header-inner logo-header-one">
                            <a href="index-2.html">
                                <img src="images/extra/<?= $data['header_logo'] ?>" alt="logo" />
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>
               
                
                <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="https://theme7x.com/search" method="get"
                        class="radius-xl">
                        <div class="input-group">
                            <input value="" name="q" type="search" placeholder="Type to search" />
                            <span class="input-group-btn"><button type="button" class="search-btn">
                                <i
                                        class="fa fa-search arrow-animation"></i></button></span>
                        </div>
                    </form>
                </div>
                <!-- MAIN Vav -->
                <div class="header-nav navbar-collapse collapse">
                    <ul class=" nav navbar-nav">
                        <li class="active">
                            <a href="index.php">Home</a>

                        </li>

                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="our commitment.php">OUR COMMITMENT</a>
                        </li>

                        </li>
                        <li> <a href="contact.php">Contact us</a></li>
                        </ul>
                </div>

            </div>
        </div>
    </div>
    </div>
</header>
<!-- HEADER END -->