<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
// for admin login
$adminname = "";
$aemail = "";

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: prof.html');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: prof.html');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  

  // REGISTER ADMIN
if (isset($_POST['reg_admin'])) {
  // receive all input values from the form
  $adminname = mysqli_real_escape_string($db, $_POST['adminname']);
  $aemail = mysqli_real_escape_string($db, $_POST['aemail']);
  $apassword_1 = mysqli_real_escape_string($db, $_POST['apassword_1']);
  $apassword_2 = mysqli_real_escape_string($db, $_POST['apassword_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($adminname)) { array_push($errors, "Adminname is required"); }
  if (empty($aemail)) { array_push($errors, "Email is required"); }
  if (empty($apassword_1)) { array_push($errors, "Password is required"); }
  if ($apassword_1 != $apassword_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a admin does not already exist with the same adminname and/or email
  $admin_check_query = "SELECT * FROM admins WHERE adminname='$adminname' OR aemail='$aemail' LIMIT 1";
  $result = mysqli_query($db, $admin_check_query);
  $admin = mysqli_fetch_assoc($result);
  
  if ($admin) { // if admin exists
    if ($admin['adminname'] === $adminname) {
      array_push($errors, "Adminname already exists");
    }

    if ($admin['aemail'] === $aemail) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register admin if there are no errors in the form
  if (count($errors) == 0) {
  	$apassword = md5($apassword_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admins (adminname, aemail, apassword) 
  			  VALUES('$adminname', '$aemail', '$apassword')";
  	mysqli_query($db, $query);
  	$_SESSION['adminname'] = $adminname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: admin_home.html');
  }
}

// LOGIN admin
if (isset($_POST['login_admin'])) {
    $adminname = mysqli_real_escape_string($db, $_POST['adminname']);
    $apassword = mysqli_real_escape_string($db, $_POST['apassword']);
  
    if (empty($adminname)) {
        array_push($errors, "Adminname is required");
    }
    if (empty($apassword)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $apassword = md5($apassword);
        $query = "SELECT * FROM admins WHERE adminname='$adminname' AND apassword='$apassword'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['adminname'] = $adminname;
          $_SESSION['success'] = "You are now logged in";
          header('location: admin_home.html');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>