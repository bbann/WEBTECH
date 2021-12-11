<?php
session_start();

// database credentials
include "database/database_credentials.php";

// initializing variables
$firstname = "";
$lastname2 = "";
$email    = "";
$errors = array();

// connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname2 = htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars($_POST['email']);
  $password_1 = htmlspecialchars($_POST['password_1']);
  $password_2 = htmlspecialchars($_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) {
    array_push($errors, "First name is required");
  }
  if (empty($lastname2)) {
    array_push($errors, "Last name is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same firstname and/or email
  $user_check_query = "SELECT * FROM signup WHERE firstname='$firstname' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['firstname'] === $firstname) {
      array_push($errors, "firstname already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO `signup` (`first_name`,`last_name`, `email`, `password`) 
  			  VALUES('$firstname', '$lastname2', '$email', '$password')";
    mysqli_query($conn, $query);
    $_SESSION['firstname'] = $firstname;
    $_SESSION['success'] = "You are now logged in";
    header('location: login.php');
  }
}





// ... 

// LOGIN USER
if (isset($_POST['login'])) {
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);

  if (empty($firstname)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: login.php');
    } else {
      array_push($errors, "Wrong firstname/password combination");
    }
  }
}
