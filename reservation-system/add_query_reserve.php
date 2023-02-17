<style>
	td {
		padding: 4px;
		margin: 4px;
		border: 1px solid grey;
		text-align: center;
		width: 12rem;
	}
</style>

<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_guest'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		$day = $_POST['days'];
		$toddler = $_POST['toddlers'];
		$kid = $_POST['kids'];
		$teenandadult = $_POST['adults'];
		$totalexpense = $_POST['totalexpense'];
		$conn->query("INSERT INTO `guest` (id, firstname, middlename, lastname, address, contactno, toddlers, kids, teensandadults, day, totalexpense) VALUES('$id', '$firstname', '$middlename', '$lastname', '$address', '$contactno','$toddler', '$kid', '$teenandadult', '$day', '$totalexpense')") or die(mysqli_connect_error());
		$query = $conn->query("SELECT * FROM `guest` WHERE `id` = '$id' &&  `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno' && `toddlers` = '$toddler' && `kids` = '$kid' && `teensandadults` = '$teenandadult' && `day` = '$day' && `totalexpense` = '$totalexpense'") or die(mysqli_connect_error());
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_connect_error());
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div style = 'border: 2px solid grey;'> <div style = 'margin: 1rem;'> 
								<h5 style = 'color:#ee6c4d;'>Please select other date. Not Available Dates:</h5><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending' ORDER BY checkin ASC") or die(mysqli_connect_error());
							echo "</div>";
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<p style = 'color: grey'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</p>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($guest_id = $fetch['guest_id']){
							$room_id = $_REQUEST['room_id'];
							$conn->query("INSERT INTO `transaction`(id, guest_id, room_id, status, checkin, totalexpense) VALUES('$id', '$guest_id', '$room_id', 'Pending', '$checkin', '$totalexpense')") or die(mysqli_connect_error());
							require("reply_reserve.php");
						}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}	
	}
