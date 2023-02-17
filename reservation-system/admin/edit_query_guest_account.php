<?php

	// FOR GUEST ACCOUNTS

	require_once 'connect.php';
	if(ISSET($_POST['edit_guest_account'])){
		$username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
		$conn->query("UPDATE `accounts` SET
        `username` = '$username', 
        `password` = '$password', 
        `email` = '$email'
        WHERE `id` = '$_REQUEST[id]'") or die(mysqli_connect_error());
		header("location:guest_account.php");
	}	