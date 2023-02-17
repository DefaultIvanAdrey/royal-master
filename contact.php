<?php
require_once 'validate.php';
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Royal Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        body {
            background-color: #2B2D42;
        }
    </style>

</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h"><img class="logo" src="image/official-logo.png" alt=""></a>
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item">
                        <a href=https://www.facebook.com/isla.staycation.qc target="_blank" class="nav-link"> <i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="javascript:void(Tawk_API.toggle())"">Click to Chat</a></li>
                        <li class=" nav-item"><a class="nav-link" href="index.php?id=<?php echo $_SESSION['id'] ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php?id=<?php echo $_SESSION['id'] ?>">Gallery</a></li>
                        <li class="nav-item active"><a class="nav-link" href="contact.php?id=<?php echo $_SESSION['id'] ?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" target="_parent" href="http://localhost/royal-master/profile.php?id=<?php echo $_SESSION['id'] ?>">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap" style="padding-top: 12rem">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6><strong>Philippines, National Capital Region</strong></h6>
                            <p>528 Epifanio de los Santos Ave, Cubao, Quezon City, 1109 Metro Manila</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><strong>(+63) 943 561 8490</strong></h6>
                            <p>Monday to Sunday 8AM to 10PM</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><strong>honordeloza@gmail.com</strong></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="padding-top: 4rem;">
            <div class="row">
                <iframe width="100%" class="mapBox" sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox allow-downloads allow-modals" frameborder="0" aria-label="Map, 528 Epifanio de los Santos Ave" src="https://maps-api-ssl.google.com/maps?hl=en&amp;ll=14.612996,121.054288&amp;output=embed&amp;q=528+Epifanio+de+los+Santos+Ave,+Cubao,+Quezon+City,+1109+Metro+Manila,+Philippines+(528+Epifanio+de+los+Santos+Ave)&amp;z=17" allowfullscreen="true"></iframe>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <p class="col-xl col-sm-12 footer-text m-0" style="text-align: center; color: white;">SBIT-3D • Group IV • 2022</p>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62821c387b967b11798f8a5b/1g363sgbj';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        function copyToClipboardNumber() {
            /* Get the text field */
            var copyText = document.getElementById("myInputNumber");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }

        function copyToClipboardEmail() {
            /* Get the text field */
            var copyText = document.getElementById("myInputEmail");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>