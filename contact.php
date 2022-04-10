﻿<?php
require_once("resource/config.php");
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<?php include(TEMPLATE_FRONT . DS . "head.php"); ?>

<body>

    <?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <section class="page">
        <div class="cover" data-image="assets/images/about-banner.jpg">
            <div class="cover-top">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6">
                            <h1 class="text-dark"><b>Contact Us
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-bottom padding-top-0">

        <div class="contact-bottom">
            <div class="container">
                <div class="row">
                    <!-- ***** Contact Text Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h5 class="margin-bottom-30">Get in touch</h5>
                        <div class="contact-text">
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Etiam tempus magna vel turpis.</p>
                            <p>Sed blandit tempus purus, sed sodales leo rutrum vel. Nam vulputate ipsum ac est congue,
                                eget commodo magna lobortis.</p>
                        </div>
                    </div>
                    <!-- ***** Contact Text End ***** -->

                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="contact-form">
                            <div class="row">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" placeholder="Name, surname">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" placeholder="E-Mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Your message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="dark-btn float-right" type="submit">
                                            <span class="show-btn">SUBMIT</span>
                                            <span class="hide-btn">SUBMIT</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <p>455 West Orchard Street Kings <br>Mountain, NC 28086</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <a href="tel:(236)688-4321">(236) 688-4321</a><br>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <a href="mailto:info@gloriacabinetpainting.ca">info@gloriacabinetpainting.ca</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

</body>

</html>