<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Odometer CSS-->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- Corporate Style CSS -->
    <link rel="stylesheet" href="assets/css/corporate-style.css">
    <!-- Common CSS -->
    <link rel="stylesheet" href="assets/css/common.css">
    <!-- Corporate Responsive CSS -->
    <link rel="stylesheet" href="assets/css/corporate-responsive.css">
    <!-- Common Responsive CSS -->
    <link rel="stylesheet" href="assets/css/common-responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!-- TITLE -->
    <title>Krishnaag IT Solutions | Blog content</title>

    <style>
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #1089d4;
        }
    </style>
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Inner Navbar Area -->
    <?php include("includes/header.php"); ?>
    <!-- End Inner Navbar Area -->

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Blogs</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                            <i class='bx bx-chevrons-right bx-fade-right'></i>
                        </a>
                    </li>
                    <li>Blogs
                        <i class='bx bx-chevrons-right bx-fade-right'></i>
                    </li>
                    <li>Reporting Exceptions in Python Scripts with Sentry
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="corporate-why-choose-us-area pt-50 pb-25">
        <div class="container">
            <div class="section-title">
                <h2>Reporting Exceptions in Python Scripts with Sentry</h2>
            </div>
        </div>
        </div>
    </section>

    <!-- Overview -->
    <section class="corporate-why-choose-us-area pt-25 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="choose-text">
                        <p class="text-justify"> Python scripts are the glue that keep many applications and their infrastructure running, but when one of your scripts throws an exception you may not know about it immediately unless you have a central place to aggregate the errors. That's where adding Sentry can solved this distributed error logging problem. <p>
                        <p class="text-justify"> we'll see how to quickly add Sentry to a new or existing Python script to report errors into a centralized location for further debugging.<p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="corporate-why-choose-us-area pt-50 pb-50" style="background-color: #add8e685;">
        <div class="container">
            <div class="section-title-text-left pb-40">
                <h2>Development environment setup</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="choose-text">
                        <p class="text-justify">Make sure you have Python 3 installed. As of right now, Python 3.8.3 is the latest version of Python. </p>
                       <p class="text-justify"> During this tutorial we're also going to use: </p>
                        <ul>
                            <li> <i class='bx bx-check-square'></i> a hosted Sentry instance on sentry.io, which we'll need an account to access. </li>
                            <li> <i class='bx bx-check-square'></i> the Sentry Python helper library to send exception data to our Sentry instance </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <!-- <section class="corporate-why-choose-us-area ptb-50">
        <div class="container">
            <div class="section-title-text-left pb-40">
                <h2>What Lightning Web Components(LWC)?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="choose-text">
                        <p style="text-align: justify;"> LWC is a new programming model levering the recent web standards. Rather than being a totally custom and development wise rigid framework, It’s quite flexible. It’s mostly the common Web Standards and a Thin Layer of Specialized services to make it a perfect fit for Modern Rich UI Implementations in Salesforce. This thin layer of specialized services contain Base Lightning Components, Lightning Data Service and User Interface API which work behind the curtain for LWC. </p>
                        <p style="text-align: justify;"> A thin layer of specialized services on top of a standard web stack results in: </p>
                        <ul>
                            <li> <i class='bx bx-check-square'></i>Ease of development for large scale modular apps. </li>
                            <li> <i class='bx bx-check-square'></i>Ease of Leveraging the latest web functionalities and constructs. </li>
                            <li> <i class='bx bx-check-square'></i> A common model and transferable skills. </li>
                            <li> <i class='bx bx-check-square'></i> Interoperable components. </li>
                            <li> <i class='bx bx-check-square'></i>Better performance. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="corporate-why-choose-us-area ptb-50" style="background-color: #add8e685;">
        <div class="container">
            <div class="section-title-text-left pb-40">
                <h2>Where to start from?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="choose-text">
                        <p style="text-align: justify;"> Here are some recommended steps: </p>
                        <ul>
                            <li> <i class='bx bx-check-square'></i>Learn more about LWC from the LWC Video Gallery. </li>
                            <li> <i class='bx bx-check-square'></i>Install VS Code and set it up for Salesforce Development.</li>
                            <li> <i class='bx bx-check-square'></i> Get easy to understand sample code for almost all use cases here. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <?php include("includes/footer.php"); ?>

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-caret-up"></i>
        <i class="bx bx-caret-up"></i>
    </div>
    <!-- End Go Top Area -->

    <script src="assets/js/platform.js" defer></script>

    <!-- Jquery Slim JS -->
    <script src="assets/js/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- Mixitup JS -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Magnific-Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Appear JS -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Parallax JS -->
    <script src="assets/js/parallax.min.js"></script>
    <!-- Map JS FILE -->
    <script src="assets/js/map.js"></script>
    <!-- Map Link -->

    <script src="assets/js/custom.js"></script>
    <script>
        var w = window;
        var p = w.location.protocol;
        if (p.indexOf("http") < 0) {
            p = "http" + ":";
        }
        var d = document;
        var f = d.getElementsByTagName('script')[0],
            s = d.createElement('script');
        s.type = 'text/javascript';
        s.async = false;
        if (s.readyState) {
            s.onreadystatechange = function() {
                if (s.readyState == "loaded" || s.readyState == "complete") {
                    s.onreadystatechange = null;
                    try {
                        loadwaprops("27218d28c96aa859ebdab7f8fc3213c55", "2ff43d5e6658a1bf5d71b62c3142be692", "2bcd5176fc905b964d913bb10db670889c45137be9522690f", "0.0");
                    } catch (e) {}
                }
            };
        } else {
            s.onload = function() {
                try {
                    loadwaprops("27218d28c96aa859ebdab7f8fc3213c55", "2ff43d5e6658a1bf5d71b62c3142be692",  "2bcd5176fc905b964d913bb10db670889c45137be9522690f", "0.0");
                } catch (e) {}
            };
        };
        s.src = p + "//mh.zoho.com/hub/js/WebsiteAutomation.js";
        f.parentNode.insertBefore(s, f);
    </script>
</body>

</html>