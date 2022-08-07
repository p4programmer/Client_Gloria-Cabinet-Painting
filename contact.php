<?php
require_once("resource/config.php");
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<?php include(TEMPLATE_FRONT . DS . "head.php"); ?>

<body>

    <?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <section class="page">
        <div class="cover" data-image="assets/images/contact-banner.jpg">
            <div class="cover-top">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6">
                            <h1 class="text-dark"><b>
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
                            <p>Use the form below to request a free quote for your cabinet painting project. If you have
                                any questions or comments, please contact us and we will get back to you within 24
                                hours.
                            </p>
                        </div>
                    </div>
                    <!-- ***** Contact Text End ***** -->

                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="contact-form">
                            <div class="row">
                                <form id="ajax-form" name="ajax-form" action="mailer.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="name" placeholder="Name:">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="tel" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="mail" name="email" placeholder="E-Mail:">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="address" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Your message"></textarea>
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
                                    <p>Delta, BC</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <a href="tel:(236)688-4321">+1-778-222-1996</a><br>
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