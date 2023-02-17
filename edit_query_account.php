<?php

    // FOR USER ACCOUNTS

	require_once 'connection.php';
	if(ISSET($_POST['profile'])){
		$password = $_POST['password'];
		$conn->query("UPDATE `accounts` SET  `password` = '$password' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
		header("location:profile.php");
	}	