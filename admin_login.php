<?php include('database.php')?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="icon" type="image/x-icon" href="images/icon.PNG">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="height:650px;
			 background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%), url(images/sea.JPG);
             background-size: cover;
             background-position: center;
			 background-repeat: no-repeat;">
  <div class="header" style="background: linear-gradient(45deg, #0250c5, #d43f8d);">
  	<h2 style="font-size: 2rem;
               text-align: center;
               letter-spacing: 2px;
               color: white;
               margin-bottom: 1rem;"> Admin Login</h2>
  </div>
	 
  <form method="post" action="admin_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Admin Name</label>
  		<input type="text" name="adminname" >
  	</div>
  	<div class="input-group">
  		<label> Password</label>
  		<input type="password" name="apassword">
  	</div>
  	<div class="input-group">
  		<button style="background: linear-gradient(45deg, #0250c5, #d43f8d);" type="submit" class="btn" name="login_admin"> Login </button>
    </div>
    <p>
  		Not yet a member? <a style=" color: orange;
   									 text-decoration: none;" href="admin_register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>