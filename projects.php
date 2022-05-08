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
<link href="assets/css/slider.css" rel="stylesheet" type="text/css">

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

    <div id="loader"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="wrapper">
                    <div class="slide-container">
                        <img src="https://webdevtrick.com/wp-content/uploads/skynature.jpg">
                        <img id="img-1" src="https://i.ibb.co/cX9998K/shoe2.jpg">
                        <input type="range" min="0" max="100" value="50" step="0.1" oninput="slide()" id="slider">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

</body>

</html>