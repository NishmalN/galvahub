<!-- FOOTER START -->

<footer class="site-footer footer-large  footer-dark    footer-wide">
    <div class="container">

    </div>
    <!-- FOOTER BLOCKES START -->
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <?php

            $extra = getAll("extra");

            if (mysqli_num_rows($extra) > 0) {
                $data = mysqli_fetch_assoc($extra);
                ?>
                <div class="row">
                    <!-- ABOUT COMPANY -->
                    <div class="col-lg-3 col-md-6 col-sm-6">

                        <div class="widget widget_about">

                            <!--<h4 class="widget-title">About Company</h4>-->
                            <div class="logo-footer clearfix p-b15">
                                <a href="index-2.html"><img src="images/extra/<?= $data['footer_logo'] ?>" alt=""></a>
                            </div>

                            <p class="max-w400"><?= $data['content'] ?></p>
                            <?php
                            $socialmedia = getAll("socialmedia");
                            if (mysqli_num_rows($socialmedia) > 0) {
                                $data = mysqli_fetch_assoc($socialmedia);
                                ?>
                                <ul class="social-icons  mt-social-links">
                                    <li><a href="<?= $data['google'] ?>" class="fa fa-google"></a></li>
                                    <li><a href="<?= $data['rss'] ?>" class="fa fa-rss"></a></li>
                                    <li><a href="<?= $data['facebook'] ?>" class="fa fa-facebook"></a></li>
                                    <li><a href="<?= $data['x'] ?>" class="fa fa-twitter"></a></li>
                                    <li><a href="<?= $data['linkedin'] ?>" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                            <?php
                            }
                            ?>
                    </div>

                    <!-- RESENT POST -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <?php
                        $contact = getAll("contact");
                        if (mysqli_num_rows($contact) > 0) {
                            $data = mysqli_fetch_assoc($contact);
                            ?>
                            <div class="widget widget_address_outer">
                                <h4 class="widget-title">Contact Us</h4>
                                <ul class="widget_address">
                                    <li><?= $data['address_info'] ?></li>
                                    <li><?= $data['email_address'] ?></li>
                                    <li><?= $data['phone_number'] ?></li>
                                    
                                </ul>

                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <!-- USEFUL LINKS -->
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                        <div class="widget widget_services inline-links">
                            <h4 class="widget-title">Useful links</h4>
                            <ul>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="our commitment.php">Our Commitment</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- TAGS -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget recent-posts-entry-date">

                        </div>
                    </div>
                    <!-- NEWSLETTER -->

                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <div class="mt-footer-bot-center">
                    <span class="copyrights-text">© pixell media</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->