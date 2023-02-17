<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="en">

<head>
	<title>Admin Panel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css " />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
	<nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
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
				<a class="btn btn-success disabled"><span class="badge"><?php echo $f_p['total'] ?></span> Pendings</a>
				<a class="btn btn-info" href="checkin.php"><span class="badge"><?php echo $f_ci['total'] ?></span> Check In</a>
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
							<th>Reserved Date</th>
							<th>Days of Stay</th>
							<th>Status</th>
							<th>Total Expense</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = 'Pending'") or die(mysqli_connect_error());
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
								<td><strong><?php if ($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))) {
												echo "<label style = 'color:#ff0000;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
											} else {
												echo "<label style = 'color:#00ff00;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
											} ?></strong></td>
								<td><?php echo $fetch['day'] ?></td>
								<td><?php echo $fetch['status'] ?></td>
								<td><?php echo $fetch['totalexpense'] ?></td>
								<td>
									<center><a class="btn btn-success" href="confirm_reserve.php?transaction_id=<?php echo $fetch['transaction_id'] ?>"><i class="glyphicon glyphicon-check"></i> Check In</a> <a class="btn btn-danger" onclick="confirmationDelete(); return false;" href="delete_pending.php?transaction_id=<?php echo $fetch['transaction_id'] ?>"><i class="glyphicon glyphicon-trash"></i> Discard</a>
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
	function confirmationDelete(anchor) {
		var conf = confirm("Are you sure you want to delete this record?");
		if (conf) {
			window.location = anchor.attr("href");
		}
	}
</script>

</html>