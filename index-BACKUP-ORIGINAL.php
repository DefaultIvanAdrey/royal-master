<!doctype html>
<html lang="en">

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

</head>

<body>

    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img class="logo" src="image/official-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a href=https://www.facebook.com/isla.travelandtours target="_blank" class="nav-link"> <i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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
                    <h6>STAYCATION at</h6>
                    <h2>QUEZON CITY</h2>
                    <p>The Sentinel Residences along EDSA Cubao QC beside SM Hypermarket Cubao QC.</p>
                </div>
            </div>
        </div>

        <div class="hotel_booking_area position">
            <div class="container">

                <form id="resForm" method="post" target="_self">

                    <div class="hotel_booking_table">

                        <div class="col-md-3">
                            <h2>Book<br> Your Room</h2>
                        </div>

                        <div class="col-md-9">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <!-- NAME -->
                                                <p style="color: #EE6C4D;">Name</p>
                                                <input for="res_name" type="text" required name="name" value="" />
                                            </div>
                                            <div class="form-group">
                                                <!-- EMAIL -->
                                                <p style="color: #EE6C4D;">Email</p>
                                                <input for="res_email" type="email" required name="email" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <!-- Contact Number -->
                                                <p style="color: #EE6C4D;">Contact Number</p>
                                                <input for="res_tel" type="tel" required name="tel" value="" />
                                            </div>
                                            <div class="form-group">
                                                <!-- Notes -->
                                                <p style="color: #EE6C4D;">Notes (if any)</p>
                                                <input for="res_notes" type="text" name="notes" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="input-group">

                                                <div class="form-group">

                                                    <?php
                                                    // @TODO - MINIMUM DATE (TODAY)
                                                    // $mindate = date("Y-m-d", strtotime("+2 days"));
                                                    $mindate = date("Y-m-d");
                                                    ?>

                                                    <!-- Notes -->
                                                    <p style="color: #EE6C4D;">Reservation Date</p>
                                                    <input type="date" required id="res_date" name="date" min="<?= $mindate ?>">
                                                </div>

                                            </div>
                                            <input class="book_now_btn button_hover" type="submit" value="Book Now" />
                </form>

                <?php
                // (A) PROCESS RESERVATION
                if (isset($_POST["date"])) {
                    require "reservation-section/2-reserve.php";
                    if ($_RSV->save(
                        $_POST["date"],
                        $_POST["name"],
                        $_POST["email"],
                        $_POST["tel"],
                        $_POST["notes"]
                    )) {
                        echo '<div class="ok">Reservation Success.</div>';
                    } else {
                        echo "<div class='err'>" . $_RSV->error . "</div>";
                    }
                }
                ?>

            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap" style="background-color: #2B2D42;">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color" style="color: white;">Hotel Accomodation</h2>
                <h4 style="color:rgba(255, 255, 255, 0.75)">
                    1 Fully furnished bedroom with WiFi and Netflix (32 Squaremeter, max of 5pax) <br>
                    Payment is upon check in, check in is 2PM then check out is 12 noon.
                </h4>
            </div>
            <div class="row mb_30">
                <div class="col-lg-12 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img width="512px" src="image/gallery/03.jpg" alt="" style="border-radius: 10px;">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4" style="color: #fff;">33th Floor Unit Bedroom</h4>
                        </a>
                        <h5 style="text-align:center">₱2,000<small>/night [Mon to Thurs]</small></h5>
                        <h5 style="text-align:center">₱2,100<small>/night [Fri to Sun]</small></h5>
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
                        <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards especially in the workplace. That’s why it’s crucial that, as women, our behavior
                            on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap" style="background-color: #EE6C4D;">
        <div class="container" style="border-radius: 10px;">
            <div class="section_title text-center">
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p style="color: #2B2D42;">The French Revolution constituted for the conscience of the dominant
                    aristocratic class a fall
                    from </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth.
                            If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth.
                            If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth.
                            If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth.
                            If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->

    <!-- Optional JavaScript -->
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

</html>