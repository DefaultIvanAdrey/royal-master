<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `transaction` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_connect_error());
	header("location:reserve.php");
?>