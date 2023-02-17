<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="en">

<head>
	<title>Hotel Online Reservation</title>
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
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">
					<i class="glyphicon glyphicon-user" style="color: white;"></i> <?php echo $name ?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="glyphicon glyphicon-off" style="color: white;"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<ul class="nav nav-pills">
			<li class="active"><a href="account.php">Accounts</a></li>
			<li><a href="reserve.php">Reservation</a></li>
		</ul>
	</div>
	<br />
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<a class="btn btn-success" href="account.php">Admin Accounts</a>
				<a class="btn btn-info disabled" href="guest_account.php">Guest Accounts</a>
				<a class="btn btn-warning" href="add_account.php"><i class="glyphicon glyphicon-plus"></i> Create New Admin Account</a>
				<br />
				<br />
				<table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>Guest ID</th>
							<th>Username</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = $conn->query("SELECT * FROM `accounts`") or die(mysqli_connect_error());
						while ($fetch = $query->fetch_array()) {
						?>
							<tr>
								<td><?php echo $fetch['id'] ?></td>
								<td><?php echo $fetch['username'] ?></td>
								<td><?php echo $fetch['email'] ?></td>
								<td>
									<center>
										<a class="btn btn-warning" href="edit_guest_account.php?id=<?php echo $fetch['id'] ?>">
											<i class="glyphicon glyphicon-edit"></i> Edit</a>
										<a class="btn btn-danger" onclick="confirmationDelete(this); return false;" href="delete_guest_account.php?id=<?php echo $fetch['id'] ?>">
											<i class="glyphicon glyphicon-remove"></i> Delete</a>
									</center>
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

</html>