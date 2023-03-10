<style>
	html {
		font-family: "Poppins", sans-serif;
		color: #EE6C4D;
	}

	p.headline {
		color: #EE6C4D;
		position: absolute;
		margin-top: 2rem;
	}
</style>

<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db_hor';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('<h5 class="headline">Failed to connect to MySQL: </h5>' . mysqli_connect_error());
}

////////////////////////////////////////////////////////////////////////////////////////////
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('<h5 class="headline">Please complete the registration form!</h5>');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit('<h5 class="headline">Please complete the registration form</h5>');
}
////////////////////////////////////////////////////////////////////////////////////////////

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo '<h5 class="headline">Username exists, please choose another!</h5>';
		include 'register.html';
	} else {
		////////////////////////////////////////////////////////////////////////////////////////////
		// Username doesnt exists, insert new account
		if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$stmt->bind_param('sss', $_POST['username'], $_POST['password'], $_POST['email']);
			$stmt->execute();
			echo '<h5 class="headline">You have successfully registered, you can now login!</h5>';
			include 'login.html';
		} else {
			// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
			echo '<h5 class="headline">Could not prepare statement!</h5>';
		}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo '<h5 class="headline">Could not prepare statement!</h5>';
}
$con->close();
?>