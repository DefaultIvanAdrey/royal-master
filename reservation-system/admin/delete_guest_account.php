<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `accounts` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
	 header("location: guest_account.php");