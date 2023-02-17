<?php
require_once 'validate.php';
?>


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
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/gallery.css">

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
                        <li class="nav-item active"><a class="nav-link" href="gallery.php?id=<?php echo $_SESSION['id'] ?>">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php?id=<?php echo $_SESSION['id'] ?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" target="_parent" href="http://localhost/royal-master/profile.php?id=<?php echo $_SESSION['id'] ?>">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================ Amenities  =================-->
    <section class="testimonial_area section_gap" style="background-color: #222;">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color" style="color: #fff;">Free access to gym, infinity pool and other amenities.</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/gallery/gym.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/pool.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/pool2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/19.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/20.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/22.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!--================ Amenities   =================-->

    <!--================ Bedroom and Bathroom  =================-->
    <section class="testimonial_area section_gap" style="background-color: #2B2D42;;">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color" style="color: #fff;">Fully furnished bedroom and bathroom with WiFi and Netflix.</h2>
            </div>
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/gallery/01.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/13.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/bathroom.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!--================ Bedroom and Bathroom   =================-->

    <!--================ Living Room and Kitchen  =================-->
    <section class="testimonial_area section_gap" style="background-color: #222;">
        <div class="container" style="max-height: 50rem;">
            <div class="section_title text-center">
                <h2 class="title_color" style="color: #fff;">Regularly maintained living room and kitchen.</h2>
            </div>
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/gallery/02.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/03.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/04.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/05.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/06.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/14.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/gallery/17.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!--================ Living Room and Kitchen   =================-->

    <!--================ Chilled products  =================-->
    <section class="testimonial_area section_gap" style="background-color: #EE6C4D;">
        <div class="container" style="border-radius: 10px;">
            <div class="section_title text-center">
                <h2 class="title_color" style="color: #fff;">Constantly stocked chilled beverage and food</h2>
            </div>
            <div class="testimonial_slider owl-carousel">
                <img class="carousel-item landscape" src="image/gallery/07.jpg" alt="">
                <img class="carousel-item landscape" src="image/gallery/08.jpg" alt="">
                <img class="carousel-item landscape" src="image/gallery/09.jpg" alt="">
                <img class="carousel-item landscape" src="image/gallery/10.jpg" alt="">
                <img class="carousel-item landscape" src="image/gallery/11.jpg" alt="">
                <img class="carousel-item landscape" src="image/gallery/12.jpg" alt="">
            </div>
        </div>
    </section>
    <!--================ Chilled products   =================-->

    <!--================ Chilled products  =================-->
    <section class="testimonial_area section_gap" style="background-color: #222;">
        <div class="container d-flex justify-content-center" style="border-radius: 10px;">
            <div class="col-md-9 d-flex justify-content-center">

                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9 justify-content-center">
                    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/12WPX8H66ClYyOzBr10NN5ro5ru1tvH_8/preview"></iframe>
                </div>

            </div>
        </div>
    </section>
    <!--================ Chilled products   =================-->


    <footer class="footer-area">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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
    <script src="js/custom.js"></script>
</body>

</html>