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
                    <li> Salesforce Developer
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="corporate-why-choose-us-area ptb-50">
        <div class="container">
            <div class="section-title">
                <h2> Multipart/form-Data in Salesforce Integration </h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="choose-text">
                        <p>Does Grandmother say you can't post a Multipart/structure information utilizing an HttpRequest in APEX? </p>
                        <p>All things considered, on the off chance that she says this now you can reveal to her this is not any more obvious!</p>
                        <p> All come from a CloudSpokes challenge (here is the connection)… at the hour of beginning the test I was certain beyond a shadow of a doubt I would have wound up the test in under a day: HTTP gets/posts are not a major issue in APEX… well so it appeared.</p>
                        <p>To finish the test you needed to settle on 4 REST decisions (login, book another transfer, transfer the record, set authorizations): during testing the last advance consistently fizzled.
                            <p>This was the first occasion when I hopped before this issue.</p>
                            <p>In the event that you would prefer not to understand what I went, straightforwardly here.</p>
                            <p>The primary thing I noted was that you can't send a base64 encoded document to a worker anticipating a twofold record. It wasn't that conspicuous to me, since I've never battled with document encoding.</p>
                            <p>Utilizing distinctive sort of irregular encoded information (other that "AA==") the aftereffects of encoding, blobbing, httpRequesting (??!!), is consistently the equivalent.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="corporate-why-choose-us-area ptb-30">
        <div class="container">
            <!-- <div class="section-title">
                <h2> What are the problems if companies don't use automation tools for marketing?</h2>
            </div> -->
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="choose-text">
                        <p>This is the thing that I required: </p>
                        <ul>
                            <li> <i class='bx bx-check-square'></i>Translate the last 4 bytes in mass .</li>
                            <li> <i class='bx bx-check-square'></i>Add it into a HttpRequest utilizing the "setBodyAsBlob()" </li>
                            <li> <i class='bx bx-check-square'></i>Get the body as a string with "getBody()" </li>
                            <li> <i class='bx bx-check-square'></i> Combine this string with the footer</li>
                            <li> <i class='bx bx-check-square'></i> base64 encode the subsequent string</li>
                            <li> <i class='bx bx-check-square'></i>Combine the base64 encoding of header, record body (from 0 to N-fourth byte), past consolidated string </li>
                            <li> <i class='bx bx-check-square'></i> base64 unencoding the subsequent string </li>
                            <!-- <li> <i class='bx bx-check-square'></i>Here you are the Blob you required!</li> -->
                        </ul>
                        <!-- <p> public static GetFile {
                            public static void uploadFile(){
                            ContentVersion conDoc = [SELECT Id, Title, VersionData FROM ContentVersion limit 1];
                            system.debug('conDoc==='+conDoc);
                            // Repost of code with fix for file corruption issue
                            // Orignal code postings and explanations
                            // Extra changes remarked GW: that fix issue with periodic debasement of records
                            String boundary = '----------------------------741e90d31eff';
                            String header = '--'+boundary+'nContent-Disposition: form-data; name="file"; filename="'+file_name+'";nContent-Type: application/octet-stream';
                            // GW: Does not prepend footer by nn, we will see why in a second
                            // String footer = 'rn--'+boundary+'--';
                            String footer = '--'+boundary+'--';
                            String headerEncoded = EncodingUtil.base64Encode(Blob.valueOf(header+'rnrn'));
                            while(headerEncoded.endsWith('='))
                            {
                            header+=' ';
                            headerEncoded = EncodingUtil.base64Encode(Blob.valueOf(header+'rnrn'));
                            }
                            String bodyEncoded = EncodingUtil.base64Encode(file_body);
                            // GW: Do not encode footer yet
                            // String footerEncoded = EncodingUtil.base64Encode(Blob.valueOf(footer));
                            Blob bodyBlob = null;
                            String last4Bytes = bodyEncoded.substring(bodyEncoded.length()-4,bodyEncoded.length());
                            // GW: Replacing this entire section
                            /*
                            if(last4Bytes.endsWith('='))
                            {
                            Blob decoded4Bytes = EncodingUtil.base64Decode(last4Bytes);
                            HttpRequest tmp = new HttpRequest();
                            tmp.setBodyAsBlob(decoded4Bytes);
                            String last4BytesFooter = tmp.getBody()+footer;
                            bodyBlob = EncodingUtil.base64Decode(headerEncoded+bodyEncoded.substring(0,bodyEncoded.length()-4)+EncodingUtil.base64Encode(Blob.valueOf(last4BytesFooter)));
                            }
                            else
                            {
                            bodyBlob = EncodingUtil.base64Decode(headerEncoded+bodyEncoded+footerEncoded);
                            }
                            */
                            // GW: substitution area to dispose of cushioning without debasing information
                            if(last4Bytes.endsWith('==')) {
                            /The '==' succession shows that the last gathering contained just a single 8 digit byte
                            /8 digit twofold portrayal of CR is 001100101
                            /8 digit twofold portrayal of LF is 001100101
                            /Stitch them together and afterward from the correct split them into 6 bit lumps
                            /001100101 gets 0000 001100101 001010
                            /Note the initial 4 pieces 0000 are indistinguishable from the cushioning used to encode the
                            /second unique 6 bit piece, this is helpful it implies we can hard code the reaction in
                            /The decimal estimations of 001100101 001100101 are 52 10
                            /The base64 planning estimations of 52 10 are 0 K
                            /Therefore, we supplant == with 0K
                            /Note: if utilizing nn rather than rn supplant == with 'alright'
                            last4Bytes = last4Bytes.substring(0,2) + '0K';
                            bodyEncoded = bodyEncoded.substring(0,bodyEncoded.length()-4) + last4Bytes;
                            String footerEncoded = EncodingUtil.base64Encode(Blob.valueOf(footer));
                            bodyBlob = EncodingUtil.base64Decode(headerEncoded+bodyEncoded+footerEncoded);
                            } else if(last4Bytes.endsWith('=')) {
                            // '=' demonstrates that encoded information previously contained two out of 3x 8 digit bytes
                            // for the existing data.
                            // The Decimal value of 001101 is 13
                            // The base64 value of 13 is N
                            // Therefore, we replace = with N
                            last4Bytes = last4Bytes.substring(0,3) + 'N';
                            bodyEncoded = bodyEncoded.substring(0,bodyEncoded.length()-4) + last4Bytes;
                            // We have appended the CR e.g. r,
                            footer = 'n' + footer;
                            String footerEncoded = EncodingUtil.base64Encode(Blob.valueOf(footer));
                            bodyBlob = EncodingUtil.base64Decode(headerEncoded+bodyEncoded+footerEncoded);
                            } else {
                            // Prepend the CR LF to the footer
                            footer = 'rn' + footer;
                            String footerEncoded = EncodingUtil.base64Encode(Blob.valueOf(footer));
                            bodyBlob = EncodingUtil.base64Decode(headerEncoded+bodyEncoded+footerEncoded);
                            }
                            HttpRequest req = new HttpRequest();
                            req.setHeader('Content-Type','multipart/form-data; boundary='+boundary);
                            req.setMethod('POST');
                            req.setEndpoint(reqEndPoint);
                            req.setBodyAsBlob(bodyBlob);
                            req.setTimeout(120000);
                            Http http = new Http();
                            HTTPResponse res = http.send(req);
                            }
                            }
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                        loadwaprops("27218d28c96aa859ebdab7f8fc3213c55", "2ff43d5e6658a1bf5d71b62c3142be692",  "2bcd5176fc905b964d913bb10db670889c45137be9522690f", "0.0");
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