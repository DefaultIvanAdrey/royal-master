<?php
$conn = new mysqli("localhost", "root", "", "db_hor") or die(mysqli_connect_error());
require_once 'validate.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Isla Travel and Tours</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/modal.scss">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Profile Exclusive CSS -->
    <link rel="stylesheet" type="text/css" href="css/profile.css" />

</head>

<body class="loggedin">

    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img class="logo" src="image/official-logo.png" alt=""></a>
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
                        <li class="nav-item"><a class="nav-link" href="index.php?id=<?php echo $_SESSION['id'] ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php?id=<?php echo $_SESSION['id'] ?>">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php?id=<?php echo $_SESSION['id'] ?>">Contact</a></li>
                        <li class="nav-item active"><a class="nav-link" target="_parent" href="http://localhost/royal-master/profile.php?id=<?php echo $_SESSION['id'] ?>">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================ User Info Area  =================-->
    <section class="accomodation_area section_gap" style="background-color: #2B2D42;">
        <div class="container">
            <div class="row">

                <?php
                $query = $conn->query("SELECT * FROM `accounts` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
                $fetch = $query->fetch_array();
                ?>

                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content">
                        <h2 class="title_color" style="color: white;">Your account details are below:</h2>

                        <form method="POST" action="profile_query.php?id=<?php echo $fetch['id'] ?>">
                            <div class="form-group">
                                <label>Guest ID</label>
                                <input disabled type="text" class="form-control" value="<?php echo $fetch['id'] ?>" name="id" style="color: white;" />
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input disabled type="text" class="form-control" value="<?php echo $fetch['username'] ?>" name="username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <a href="#" onclick="showPassword()"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                <input type="password" class="form-control" value="<?php echo $fetch['password'] ?>" name="password" id="password" />
                            </div>
                            <div class="form-group">
                                <button name="edit_guest_account" class="btn btn-warning form-control" onclick="confirmationDelete()"><i class="glyphicon glyphicon-edit"></i>Update Password</button>
                            </div>
                            <br />
                            <div class="form-group">
                                <label>Email Address</label>
                                <input disabled type="email" class="form-control" value="<?php echo $fetch['email'] ?>" name="email" />
                            </div>
                        </form>
                    </div>
                </div>

                <!--================ User Info Area  =================-->


            </div>
    </section>

    <!--================ Transaction History Area  =================-->

    <section class="accomodation_area section_gap" style="background-color: #202124;">

        <div class="section_title text-center">
            <h2 class="title_color" style="color: #e8eaed;">Transaction History</h2>
        </div>

        <div class="container">
            <div class="row">



                <?php
                $query = $conn->query("SELECT * FROM `transaction` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
                $fetch = $query->fetch_array();
                ?>

                <br />
                <div class="container-fluid">
                    <div class="panel panel-default">
                        <?php
                        $q_p = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending' && `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
                        $f_p = $q_p->fetch_array();
                        $q_ci = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Check In' && `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
                        $f_ci = $q_ci->fetch_array();
                        $q_ci = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Check Out' && `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
                        $f_ci = $q_ci->fetch_array();
                        ?>
                        <div class="panel-body">
                            <br />
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Name</th>
                                        <th>Contact No.</th>
                                        <th>Room Type</th>
                                        <th>Room No.</th>
                                        <th>Toddlers</th>
                                        <th>Kids</th>
                                        <th>Teens and Adults</th>
                                        <th>Check In</th>
                                        <th>Days</th>
                                        <th>Check Out</th>
                                        <th>Status</th>
                                        <th>Extra Bed</th>
                                        <!-- <th>Bill</th> -->
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = 'Check Out'");
                                    while ($fetch = $query->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $fetch['transaction_id'] ?></td>
                                            <td><?php echo $fetch['firstname'] . " " . $fetch['middlename'] . " " . $fetch['lastname'] ?></td>
                                            <td><?php echo $fetch['contactno'] ?></td>
                                            <td><?php echo $fetch['room_type'] ?></td>
                                            <td><?php echo $fetch['room_no'] ?></td>
                                            <td><?php echo $fetch['toddlers'] ?></td>
                                            <td><?php echo $fetch['kids'] ?></td>
                                            <td><?php echo $fetch['teensandadults'] ?></td>
                                            <td><?php echo "<label style = 'color:#72af83;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>" . " @ " . "<label>" . date("h:i a", strtotime($fetch['checkin_time'])) . "</label>" ?></td>
                                            <td><?php echo $fetch['days'] ?></td>
                                            <td><?php echo "<label style = 'color:#cf6679;'>" . date("M d, Y", strtotime($fetch['checkin'] . "+" . $fetch['days'] . "DAYS")) . "</label>" . " @ " . "<label>" . date("h:i A", strtotime($fetch['checkout_time'])) . "</label>" ?></td>
                                            <td><?php echo $fetch['status'] ?></td>
                                            <td><?php if ($fetch['extra_bed'] == "0") {
                                                    echo "None";
                                                } else {
                                                    echo $fetch['extra_bed'];
                                                } ?></td>
                                            <!-- <td><?php echo "Php. " . $fetch['bill'] . ".00" ?></td> -->
                                            <td><label class="">Paid</label></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--================ Transaction History Area  =================-->

    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <p class="col-xl col-sm-12 footer-text m-0" style="text-align: center; color: white;">SBIT-3D • Group IV • 2022</p>
            </div>
        </div>
    </footer>

</body>

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
    function showPassword() {
        var password = document.getElementById("password");
        if (password.type === "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }

    function confirmationDelete() {
        alert("Password updated.");
    }
</script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#table").DataTable();
    });
</script>

</html>