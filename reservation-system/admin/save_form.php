<?php
require_once 'connect.php';
if (isset($_POST['add_form'])) {
	$room_no = $_POST['room_no'];
	$days = $_POST['days'];
	$extra_bed = $_POST['extra_bed'];
	$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `status` = 'Check In'") or die(mysqli_connect_error());
	$row = $query->num_rows;
	$time = date("H:i:s", strtotime("+8 HOURS"));
	if ($row > 0) {
		echo '<script type="text/javascript">';
		echo 'alert("Room is not available. Make sure that no guests is currently checked in.");';
		echo 'window.location.href = "checkin.php";';
		echo '</script>';
	} else {
		$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_connect_error());
		$fetch2 = $query2->fetch_array();
		$checkout = date("Y-m-d", strtotime($fetch['checkin'] . "+" . $days . "DAYS"));
		$conn->query("UPDATE `transaction` SET `room_no` = '$room_no', `days` = '$days', `extra_bed` = '$extra_bed', `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total3' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_connect_error());
		header("location:reserve.php");
	}
}
?>



function confirmationDelete(anchor) {
var conf = confirm("Room not available");
if (conf) {
window.location = anchor.attr("href");
}
}
</script>