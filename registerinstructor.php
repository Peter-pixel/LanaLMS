
<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'lana';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['Username'], $_POST['EmployeeNo'], $_POST['Email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['Username']) || empty($_POST['EmployeeNo']) || empty($_POST['Email'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT InstructorId, Username FROM instructor WHERE EmployeeNo = ?')) {
	$stmt->bind_param('s', $_POST['EmployeeNo']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Instuctor already exists!';
	} else {
		// Username doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO instructor (Username, Email, TelephoneNo, EmployeeNo, Unit) VALUES (?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$stmt->bind_param('sss', $_POST['Username'], $_POST['Email'], $_POST['TelephoneNo'], $_POST['EmployeeNo'], $_POST['Unit']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();

?>
}
