<?php include('database.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title> Admin Registration </title>
  <link rel="icon" type="image/x-icon" href="images/icon.PNG">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="height:650px;
			 background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%), url(images/sky.jpg);
   			 background-position: bottom;
   			 background-size: cover;">
  <div class="header" style="background: linear-gradient(45deg, #0250c5, #d43f8d);">
  	<h2 style="font-size: 2rem;
               text-align: center;
               letter-spacing: 2px;
               color: white;
               margin-bottom: 1rem;">Register</h2>
  </div>
	
  <form method="post" action="admin_register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Admin Name</label>
  	  <input type="text" name="adminname" value="<?php echo $adminname; ?>" required />
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="aemail" value="<?php echo $aemail; ?>" required />
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="apassword_1" required />
  	</div>
  	<div class="input-group">
  	  <label>Confirm Password</label>
  	  <input type="password" name="apassword_2" required />
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_admin" style="background: linear-gradient(45deg, #0250c5, #d43f8d);">Register</button>
  	</div>
  	<p>
  		Already a member? <a style=" color: orange;
   									 text-decoration: none;" href="admin_login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>