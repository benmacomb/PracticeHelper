<?php
session_start();
require_once "Dao.php";
$dao = new Dao();
$_SESSION['username'] = htmlspecialchars($_POST['username']); 
$_SESSION['password'] = htmlspecialchars($_POST['password']);
$_SESSION['confirm_pass'] = htmlspecialchars($_POST['confirm_pass']); 

/*error handling:*/
$signup_errors = array();
$valid = true; 
if (empty($_SESSION['username'])){
  $signup_errors[] = 'Please enter a user name.';
  $valid = false; 
} elseif ($dao->userExists($_SESSION['username'])) {
    $signup_errors[] = 'User name already exists, please create a different one.';
    $valid = false;
}

if (empty($_SESSION['password'])) {
  $signup_errors[] = 'Please enter a password';
  $valid = false;
} 

if (empty($_SESSION['confirm_pass'])) {
    $signup_errors[] = "Please confirm your password.". 
    $valid = false;
} elseif ($_SESSION['password'] !== $_SESSION['confirm_pass']) {
    $signup_errors[] = "Confirm password doesn't match password.";
    $valid = false;
}

if (!$valid) {
  $_SESSION['signup_errors'] = $signup_errors;
  header("Location:../signup.php");
  exit;
}


/*If there are no errors, save the new user account credentials and redirect
to the practice page.*/
$_SESSION['signup_errors'] = null;

//password_hash() is built into php. It uses BCRYPT by default and generates its own salt. 
$options = ['cost' => 10,]; //cost for password_hash()
$hashed_pass = password_hash($_SESSION['password'], PASSWORD_DEFAULT, $options);

$dao->saveUser($_SESSION['username'], $hashed_pass);
$_SESSION['success'] = true; 
$_SESSION['logged_in'] = true;
if (isset($_SESSION['signup_errors'])) {
  unset($_SESSION['signup_errors']);
}
header("Location:../practicepage.php");
?>