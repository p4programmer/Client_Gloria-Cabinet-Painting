<?php
require_once("resource/config.php");
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gloria Cabinet Painting</title>
<meta name="description"
    content="We are a locally owned and operated company, majorly offering our services around the lower mainland and adjacent areas.Having ample experience in successfully completing customized painting and cabinet refinishing works in more than 100’s of kitchens comprising of oak, wood, MDF, laminate, thermofoil, melamine etc." />
<meta name="keywords"
    content="Gloria Cabinet Painting, customized painting and cabinet, cabinet refinishing works, cabinet, kitchen cabinets" />
<meta name="author" content="Gloria Cabinet Painting" />

<!-- Favicon -->
<link rel="icon" type="image/png" href="" />

<!-- Bootstrap & Plugins CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/foundation.css" rel="stylesheet" type="text/css" />
<link href="assets/css/twentytwenty.css" rel="stylesheet" type="text/css" />

<body>

    <?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <section class="page">
        <div class="cover" data-image="assets/images/services-banner.jpg">
            <div class="cover-top">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6">
                            <h1 class="text-dark"><b>Pur Projects
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container mt-5 d-flex justify-content-center">
        <div class="row slide-row">
            <div class="col-lg-12">
                <div class="twentytwenty-container">
                    <img src="assets/images/a1.jpg" />
                    <img src="assets/images/a2.jpg" />
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row slide-row">
            <div class="col-lg-12">
                <div class="twentytwenty-container">
                    <img src="assets/images/b1.jpg" />
                    <img src="assets/images/b2.jpg" />
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row slide-row">
            <div class="col-lg-12">
                <div class="twentytwenty-container">
                    <img src="assets/images/c1.jpg" />
                    <img src="assets/images/c2.jpg" />
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row slide-row">
            <div class="col-lg-12">
                <div class="twentytwenty-container">
                    <img src="assets/images/d1.jpg" />
                    <img src="assets/images/d2.jpg" />
                </div>
            </div>
        </div>
    </div>


    <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.event.move.js"></script>
    <script src="assets/js/jquery.twentytwenty.js"></script>
    <script>
    $(function() {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
            default_offset_pct: 0.7
        });
        $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
            default_offset_pct: 0.3,
            orientation: 'vertical'
        });
    });
    </script>
</body>

</html>