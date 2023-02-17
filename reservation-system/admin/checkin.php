<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="eng">

<head>
	<title>Admin Panel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css " />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
	<nav style="background-color:rgba(0, 0, 0, 0.5);" class="navbar navbar-default" style="border: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" style="color: white;">Admin Panel - Isla Staycation</a>
			</div>
			<ul class="nav navbar-nav pull-right ">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="glyphicon glyphicon-user" style="color: white;"></i> <?php echo $name; ?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="glyphicon glyphicon-off" style="color: white;"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<ul class="nav nav-pills">
			<li><a href="account.php">Accounts</a></li>
			<li class="active"><a href="reserve.php">Reservation</a></li>
		</ul>
	</div>
	<br />
	<div class="container-fluid">
		<div class="panel panel-default">
			<?php
			$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_connect_error());
			$f_p = $q_p->fetch_array();
			$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_connect_error());
			$f_ci = $q_ci->fetch_array();
			?>
			<div class="panel-body">
				<a class="btn btn-success" href="reserve.php"><span class="badge"><?php echo $f_p['total'] ?></span> Pendings</a>
				<a class="btn btn-info disabled"><span class="badge"><?php echo $f_ci['total'] ?></span> Check In</a>
				<a class="btn btn-warning" href="checkout.php"><i class="glyphicon glyphicon-eye-open"></i> Check Out</a>
				<br />
				<br />
				<table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>Transaction ID</th>
							<th>Account ID</th>
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
							<th>Total Expense</th>
							<!-- <th>Bill</th> -->
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = 'Check In'") or die();
						while ($fetch = $query->fetch_array()) {
						?>
							<tr>
								<td><?php echo $fetch['transaction_id'] ?></td>
								<td><?php echo $fetch['id'] ?></td>
								<td><?php echo $fetch['firstname'] . " " . $fetch['middlename'] . " " . $fetch['lastname'] ?></td>
								<td><?php echo $fetch['contactno'] ?></td>
								<td><?php echo $fetch['room_type'] ?></td>
								<td><?php echo $fetch['room_no'] ?></td>
								<td><?php echo $fetch['toddlers'] ?></td>
								<td><?php echo $fetch['kids'] ?></td>
								<td><?php echo $fetch['teensandadults'] ?></td>
								<td><?php echo "<label style = 'color:#EE6C4D;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>" . " @ " . "<label>" . date("h:i a", strtotime($fetch['checkin_time'])) . "</label>" ?></td>
								<td><?php echo $fetch['days'] ?></td>
								<td><?php echo "<label style = 'color:#FFD07B;'>" . date("M d, Y", strtotime($fetch['checkin'] . "+" . $fetch['days'] . "DAYS")) . "</label>" ?></td>
								<td><?php echo $fetch['status'] ?></td>
								<td><?php if ($fetch['extra_bed'] == "0") {
										echo "None";
									} else {
										echo $fetch['extra_bed'];
									} ?></td>
								<td><?php echo $fetch['totalexpense'] ?></td>
								<!-- <td><?php echo "Php. " . $fetch['bill'] . ".00" ?></td> -->
								<td>
									<center><a class="btn btn-warning" href="checkout_query.php?transaction_id=<?php echo $fetch['transaction_id'] ?>" onclick="confirmationCheckin(); return false;"><i class="glyphicon glyphicon-check"></i> Check Out</a></center>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#table").DataTable();
	});
</script>
<script type="text/javascript">
	function confirmationCheckin(anchor) {
		var conf = confirm("Are you sure you want to check out?");
		if (conf) {
			window.location = anchor.attr("href");
		}
	}
</script>

</html>