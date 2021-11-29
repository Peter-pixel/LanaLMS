<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$telephoneno = "";
$employeeno = "";
$unit = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'lana');

// REGISTER USER
if (isset($_POST['registerinstructor'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $telephoneno = mysqli_real_escape_string($db, $_POST['telephoneno']);
  $employeeno = mysqli_real_escape_string($db, $_POST['employeeno']);
  $unit = mysqli_real_escape_string($db, $_POST['unit']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($telephoneno)) { array_push($errors, "Telephone number is required"); }
  if (empty($employeeno)) { array_push($errors, "Employee number is required"); }
  if (empty($unit)) { array_push($errors, "Unit is required"); }


  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM instructor WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$sql = "INSERT INTO instructor (Username, Email, TelephoneNo, EmployeeNo, Unit) 
  			  VALUES('$username', '$email', '$telephoneno', '$employeeno', '$unit')";

  	 $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
  }
?>