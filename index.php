<?php
require_once("resource/config.php");
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<?php include(TEMPLATE_FRONT . DS . "head.php"); ?>

<body>

    <?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <section class="page">
        <div class="cover" data-image="assets/images/home-banner.jpg">
            <div class="cover-top">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6">
                            <h1 class="text-dark"><b>Gloria Cabinet Painting</b>
                            </h1>
                            <p>- Dreams come true with us -</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** About Item Start ***** -->
    <section class="section padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title dotted">What We Do</h2>
                    </div>
                    <div class="left-text">
                        <p class="dark">We are a locally owned and operated company, majorly offering our services
                            around the lower mainland and adjacent areas. Our team of craftsmen and finishers provide
                            quality workmanship and finishes catering to the demands of each client at an outstanding
                            value. Having ample experience in successfully completing customized painting and cabinet
                            refinishing works in more than 100’s of kitchens comprising of oak, wood, MDF, laminate,
                            thermofoil, melamine etc.</p>
                        <ul class="margin-bottom-40">
                            <li>Check out our services</li>
                            <li>Get a quote</li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Item End ***** -->

    <!-- *****Our Process Area Start ***** -->
    <section class="half-parallax">
        <div class="parallax-image"></div>
        <div class="parallax-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="parallax-item">
                            <i class="fa fa-hourglass-o"></i>
                            <h5 class="feature-title">PLANNING</h5>
                            <p>Proin luctus odio et purus iaculis, et porta ex molestie. Curabitur euismod nulla enim.
                            </p>
                            <a class="dark-btn" href="gallery.html">
                                <span class="show-btn">READ MORE</span>
                                <span class="hide-btn">READ MORE</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="parallax-item">
                            <i class="fa fa-connectdevelop"></i>
                            <h5 class="feature-title">DESIGNING</h5>
                            <p>Vestibulum justo odio, auctor sed elit vitae, sollicitudin varius metus. Maecenas diam.
                            </p>
                            <a class="dark-btn" href="gallery.html">
                                <span class="show-btn">READ MORE</span>
                                <span class="hide-btn">READ MORE</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="parallax-item">
                            <i class="fa fa-flag-o"></i>
                            <h5 class="feature-title">IMPLEMENTING</h5>
                            <p>Integer tincidunt aliquam nibh. Sed sed velit tristique, egestas lorem eu, fermentum
                                diam.</p>
                            <a class="dark-btn" href="gallery.html">
                                <span class="show-btn">READ MORE</span>
                                <span class="hide-btn">READ MORE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *****Our Process Area End ***** -->

    <section class="page">
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-list">
                            <div class="row">

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <a href="project-single.html" class="project-list-item">
                                        <div class="img">
                                            <img src="assets/images/photos/project/1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h3>MODERN KITCHENS</h3>
                                            <p>Proin luctus odio et purus iaculis, et porta ex molestie. Curabitur
                                                euismod nulla enim.</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>

    <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

</body>

</html>