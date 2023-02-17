<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
	<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" style="color: white;" >Admin Panel - Isla Travel and Tours</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #f0ad4e;"><i class = "glyphicon glyphicon-user" style="color: #f0ad4e;"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off" style="color: #f0ad4e;"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li class = "active"><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Edit Guest Account</div>
				<?php
					$query = $conn->query("SELECT * FROM `accounts` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_guest_account.php?id=<?php echo $fetch['id']?>">
                        <div class = "form-group">
							<label>Guest ID</label>
							<input disabled type = "text" class = "form-control" value = "<?php echo $fetch['id']?>" name = "id" />
						</div>
						<div class = "form-group">
							<label>Username</label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password</label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
						</div>
						<div class = "form-group">
							<label>Email Address</label>
							<input type = "email" class = "form-control" value = "<?php echo $fetch['email']?>" name = "email" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_guest_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>