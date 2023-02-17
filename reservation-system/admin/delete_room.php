<?php
	require_once 'connect.php';
	mysql_query("DELETE FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_connect_error());
	header("location:room.php");
?>