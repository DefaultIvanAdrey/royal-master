<?php
require_once 'validate.php';
?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Isla Travel and Tours</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/modal.scss">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        .footer-area {
            padding: 32px 0px;
            color: white;
        }

        .hr {
            border: 1px solid white;
        }

        .footer-bottom {
            padding-top: 2rem;
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
                        <li class=" nav-item active"><a class="nav-link" href="index.php?id=<?php echo $_SESSION['id'] ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php?id=<?php echo $_SESSION['id'] ?>">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php?id=<?php echo $_SESSION['id'] ?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" target="_parent" href="http://localhost/royal-master/profile.php?id=<?php echo $_SESSION['id'] ?>">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>

                    </ul>

                </div>

            </nav>
        </div>
    </header>


    <!--================Header Area =================-->

    <!--================Banner Area =================-->

    <section class="banner_area">

        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>

            <div class="container">

                <div class="banner_content text-center">
                    <h3>STAYCATION at</h3>
                    <h2 style="margin-top: 1rem;">QUEZON CITY</h2>
                    <h4 style="margin-top: 2rem; font-weight: lighter">The Sentinel Residences along EDSA Cubao QC beside SM Hypermarket Cubao QC.</h4>
                    <a href="http://localhost/royal-master/reservation-system/add_reserve.php?room_id=1?id=<?php echo $_SESSION['id'] ?>" class="btn theme_btn button_hover" style="margin-top: 2rem">Book Now</a>
                </div>
            </div>

        </div>
        <!--================Banner Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap" style="background-color: #2B2D42;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img width="512px" src="image/gallery/03.jpg" alt="" style="border-radius: 10px;">
                            </div>
                            <a href="http://localhost/royal-master/reservation-system/add_reserve.php?room_id=1?id=<?php echo $_SESSION['id'] ?>" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content">
                            <h2 class="title_color" style="color: #EE6C4D;">Hotel Accommodation and Rates</h2>
                            <h4 style="color: #EE6C4D;">
                                1 Fully furnished bedroom with WiFi and Netflix <br> <small style="color: grey;">(32 Squaremeter, max of 5pax)</small></h4>
                            <h4 style="color: #EE6C4D;">Payment is upon check in. <br> <small style="color: grey;">Check in is 2PM then check out is 12 noon.</small> </h4>
                            <h4 style="text-align:left; color: #EE6C4D;">
                                <hr style="height:2px; background-color:grey;">
                                PHP 2,100 <small style="color: grey;">Monday to Thursday</small> <br>
                                PHP 2,300 <small style="color: grey;"> Friday to Sunday</small> <br>
                                2pax/<small style="color: grey;">22hrs</small><br>
                                Additional PHP 300<small style="color: grey;">/pax</small>
                                <hr style="height:2px; background-color:grey;">
                            </h4>
                            <h3 style="text-align:center; color: #EE6C4D;">
                                Max of 5pax <br>
                                FREE ACCESS TO GYM AND INFINITY POOL <br></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us</h2>
                            <p><strong>Who:</strong> Honor C. De Loza <br>
                                <strong>What:</strong> Staycation Home Rental <br>
                                <strong>When:</strong> Started last March 2020 <br>
                                <strong>Where:</strong> Located at 528 Epifanio De Los Santos Avenue, Cubao, Quezon City, 1109 Metro Manila, Philippines <br>
                                <strong>Why:</strong> For those people that want to have a decent and nice staycation unit in a short period of time.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/official-logo.png" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->

        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap" style="background-color: #EE6C4D;">
            <div class="container" style="border-radius: 10px;">
                <div class="section_title text-center">
                    <h2 class="title_color">Reviews from our Clients</h2>
                    <a href="https://www.facebook.com/isla.staycation.qc/reviews" class="btn theme_btn" target="_blank">
                        <p style="color: #2B2D42;">Click here to leave a review.</p>
                    </a>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item" style="border-radius:16px;">
                        <img style="width: 96px; border-radius:16px;" src="image/dp-an.jpg" alt="">
                        <div class="media-body">
                            <p style="color: black;">Thank you so much isla travel and tour specialy Mam Helen and to your Husband ang babait niyo po ang ganda pa ng unit 😊</p>
                            <a href="https://www.facebook.com/nhicks04" target="_blank">
                                <h4 class="sec_h4">An Rho</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item" style="border-radius:16px;">
                        <img style="width: 96px; border-radius:16px;" src="image/dp-sheryll.jpg" alt="">
                        <div class="media-body">
                            <p style="color: black;">Ang ganda ng unit malinis and spacious. Pede na rin dito pang family, will be back soon. Ganda rin ng view kasi nasa top floor ang unit. Also the pool ang gandaa lalo kapag nag swimming kayo ng 4pm-6pm maabutan nyo ang sunset which I love. 😍🌇
                                Sobrang bait din ng owner, approachable din sya. ❤️ <br>
                                <strong>Spacious rooms • Thoughtful amenities • Historic building </strong>
                            </p>
                            <a href="https://www.facebook.com/sherryl.protacio" target="_blank">
                                <h4 class="sec_h4">Sherryl Protacio</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item" style="border-radius:16px;">
                        <img style="width: 96px; border-radius:16px;" src="image/dp-arianne.jpg" alt="">
                        <div class="media-body">
                            <p style="color: black;">Satisfied customer here! Gonna come back here next time! ❤️</p>
                            <a href="https://www.facebook.com/iyanadeloza" target="_blank">
                                <h4 class="sec_h4">Arianne Regencia</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item" style="border-radius:16px;">
                        <img style="width: 96px; border-radius:16px;" src="image/dp-leonard.jpg" alt="">
                        <div class="media-body">
                            <p style="color: black;">Thank you..the room is clean, Nice view and comfortable to stay..😊 the owner is accomodating din..</p>
                            <a href="https://www.facebook.com/leonard.guiam" target="_blank">
                                <h4 class="sec_h4">Leonard Guiam</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item" style="border-radius:16px;">
                        <img style="width: 96px; border-radius:16px;" src="image/dp-kim.jpg" alt="">
                        <div class="media-body">
                            <p style="color: black;">Very accomodating ang owner. Ang ganda din ng view ❤️❤️❤️</p>
                            <a href="https://www.facebook.com/profile.php?id=100000111648241" target="_blank">
                                <h4 class="sec_h4">Kim Cardona</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->

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

        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery.dataTables.js"></script>
        <script src="../js/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            function confirmationDelete(anchor) {
                var conf = confirm("Are you sure you want to delete this record?");
                if (conf) {
                    window.location = anchor.attr("href");
                }
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#table").DataTable();
            });
        </script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
</body>