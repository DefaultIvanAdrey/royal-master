<?php

	// FOR GUEST ACCOUNTS

	require_once 'connect.php';
	if(ISSET($_POST['edit_guest_account'])){
        $password = $_POST['password'];
		$conn->query("UPDATE `accounts` SET
        `password` = '$password'
        WHERE `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
		header("location:profile.php?id=$_REQUEST[id]");
	}	