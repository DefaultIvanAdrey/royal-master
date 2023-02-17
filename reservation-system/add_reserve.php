<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hotel Online Reservation</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' />


	<style>
		html {
			background-color: #2B2D42;
		}

		body {
			background-color: #2B2D42;
		}

		p {
			font-family: "Poppins", sans-serif;
			color: #EE6C4D;
		}

		.room-preview {
			margin-left: 6%;
		}

		h6 {
			font-family: "Poppins", sans-serif;
			color: #EE6C4D;
			font-weight: normal;
			margin-right: 2rem;
		}

		h6.login {
			text-align: center;
			font-family: "Poppins", sans-serif;
			color: #EE6C4D;
			font-weight: normal;
			margin-bottom: 2rem;
			font-style: normal;
		}

		.card {
			position: relative;
			width: 600px;
			border: none;
			padding: 3rem;
			margin-bottom: 3rem;
		}

		.card.right {
			margin-left: 3rem;
		}

		.head .card {
			align-items: center;
			width: 100%;
			border: none;
			margin-top: 2rem;
			margin-bottom: 2rem;
			padding-top: 1rem;
			padding-bottom: 1rem;
		}

		.head {
			width: 100%;
		}

		.btr:hover {
			color: white;
			background-color: #EE6C4D;
		}

		.btl:hover {
			color: white;
			background-color: #EE6C4D;
		}

		.btn-dark {
			color: #fff;
			background-color: #2B2D42;
			border-color: #2B2D42;
		}

		.btn-dark:hover {
			color: #fff;
			background-color: #EE6C4D;
			border-color: #EE6C4D;
		}

		.nav-pills {
			display: table !important;
			width: 100%;
		}

		.nav-pills .nav-link {
			border-radius: 0px;
			border-bottom: 1px solid #3F84E540;
		}

		.nav-item {
			display: table-cell;
			background: #3F84E52e;
		}

		.form {
			padding: 16px;
			height: auto;
		}

		.form input {
			margin-bottom: 12px;
			border-radius: 3px;
		}

		.form input:focus {
			box-shadow: none;
		}

		.form button {
			margin-top: 20px;
		}

		img.logo {
			width: 160px;
			height: auto;
		}

		img.preview {
			display: flex;
			justify-content: center;
		}

		p.subtitle {
			text-align: center;
		}

		.theme_btn {
			text-align: left;
			background-color: #2B2D42;
			color: white;
			width: 5rem;
		}

		.theme_btn:hover {
			text-align: left;
			background-color: #EE6C4D;
			color: white;
		}

		.btn-info {
			background-color: #EE6C4D;
			border: #EE6C4D 2px solid;
		}

		.btn-info:hover {
			background-color: #2B2D42;
			border: #EE6C4D 2px solid;
		}
	</style>
</head>

<body>

	<div class="head">
		<div class="card">
			<img class="logo" src="image/official-logo.png" alt="" />
		</div>
	</div>
	<div class="d-flex justify-content-center align-items-center">
		<div class="card left">
			<a href="http://localhost/royal-master/index.php" class="btn theme_btn">← Back</a> <br>
			<h3 class="title_color" style="color: #EE6C4D;">Hotel Accomodation and Rates</h3>
			<h6 style="color: #EE6C4D;">
				1 Fully furnished bedroom with WiFi and Netflix <br> <small style="color: grey;">(32 Squaremeter, max of 5pax)</small></h6>
			<h6 style="color: #EE6C4D;">Payment is upon check in. <br> <small style="color: grey;">Check in is 2PM then check out is 12 noon.</small> </h6>
			<h6 style="text-align:left; color: #EE6C4D;">
				<hr style="height:2px; background-color:grey;">
				PHP 2,100 <small style="color: grey;">Monday to Thursday</small> <br>
				PHP 2,300 <small style="color: grey;">Friday to Sunday</small> <br>
				2pax/<small style="color: grey;">22hrs</small><br>
				Additional PHP 300<small style="color: grey;">/pax</small>
				<hr style="height:2px; background-color:grey;">
			</h6>
			<h5 style="text-align:center; color: #EE6C4D;">
				Max of 5pax <br>
				FREE ACCESS TO GYM AND INFINITY POOL</h5>

			<?php
			session_start();
			$conn = new mysqli("localhost", "root", "", "db_hor") or die(mysqli_connect_error());
			require_once 'admin/connect.php';
			$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_connect_error());
			$fetch = $query->fetch_array();
			$_POST['id'] = $_SESSION['id'];

			$conn2 = new mysqli("localhost", "root", "", "db_hor") or die(mysqli_connect_error());
			$query2 = $conn2->query("SELECT * FROM `accounts` WHERE `id` = '$_SESSION[id]'") or die(mysqli_connect_error());
			$fetch2 = $query2->fetch_array();

			?>

		</div>

		<div class="card right">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Account ID</label>
					<input readonly type="text" class="form-control" name="id" required="required" value="<?php echo $_SESSION['id'] ?>" />
				</div>
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" name="firstname" required="required" />
				</div>
				<div class="form-group">
					<label>Middle Name</label>
					<input type="text" class="form-control" name="middlename" required="required" />
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lastname" required="required" />
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control" name="address" required="required" value="<?php echo $fetch2['email'] ?>" />
				</div>
				<div class="form-group">
					<label>Contact Number</label>
					<input type="number" class="form-control" name="contactno" required="required" />
				</div>
				<div class="form-group">
					<label>Date of Check in</label>
					<input type="date" class="form-control" name="date" required="required" />
				</div>
				<div class="form-group">
					<label>Days of stay</label>
					<select name="days" required="required" class="form-control" id="dy" onchange="Expense();">
						<?php
						for ($i = 0; $i <= 100; $i++) {
						?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label><strong>Additional</strong> No. of Toddlers (0 to 2 yrs. old): Free</label>
					<select name="toddlers" required="required" class="form-control" id="tddlr" onchange="Expense();">
						<?php
						for ($i = 0; $i <= 5; $i++) {
						?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label><strong>Additional</strong> No. of Kids (3 to 12 yrs. old): 150 per head</label>
					<select name="kids" required="required" class="form-control" id="kd" onchange="Expense();">
						<?php
						for ($i = 0; $i <= 5; $i++) {
						?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label><strong>Additional</strong> No. of Teen and Adult (13 and above): 300 per head</label>
					<select name="adults" required="required" class="form-control" id="tn" onchange="Expense();">
						<?php
						for ($i = 0; $i <= 5; $i++) {
						?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Total Expense</label>
					<input readonly type="number" class="form-control" name="totalexpense" required="required" id="total" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-info form-control" name="add_guest"><i class="glyphicon glyphicon-save"></i>Submit</button>
				</div>
			</form>
			<div class="form-group">
				<br><?php require 'add_query_reserve.php' ?>
			</div>
		</div>

	</div>
</body>

<script>
	function Expense() {

		var DayCount = document.getElementById('dy').value;

		var ToddlerCount = document.getElementById('tddlr').value;

		var KidCount = document.getElementById('kd').value;
		var KidFee = 150;
		var KidTotalFee = KidFee * KidCount;

		var AdultCount = document.getElementById('tn').value;
		var AdultFee = 300;
		var AdultTotalFee = AdultFee * AdultCount;

		var TotalPaxFee = KidTotalFee + AdultTotalFee;
		var InitialValue = 2100;
		var TotalAdditionalFee = TotalPaxFee * DayCount;

		var TotalExpense = InitialValue;
		var PaxAmount = KidCount + AdultCount;

		TotalPaxFee = KidTotalFee + AdultTotalFee;
		TotalAdditionalFee = TotalPaxFee * DayCount;
		TotalExpense = (InitialValue * DayCount) + TotalAdditionalFee;

		if (TotalAdditionalFee == 0) {
			TotalPaxFee = 0;
		}

		document.getElementById('total').value = TotalExpense;
	}
</script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>