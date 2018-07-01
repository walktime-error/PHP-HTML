<?php
session_start();

// initializing variables
$firstName = "";
$lastName = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost:3306', 'root', '', 'Overpowered');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "FirstName is required"); }
  if (empty($lastName)) { array_push($errors, "LastName is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Employee WHERE Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO Employee(RegisterDate, FirstName, LastName, Email, `Password`) 
                         VALUES(CURDATE(), '$firstName', '$lastName', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['FirstName'] = $firstName;
  	$_SESSION['success'] = "You are now logged in";
	header('location: dashboard.php');
  }
}

?>