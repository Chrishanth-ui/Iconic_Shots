<?php include('database.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="images/icon.PNG">
    <title> Login </title>
</head>
<body  style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%), url(images/sunset.jpg);
    background-position: bottom;
    background-size: cover;">

    <section id="login-window">
        <h1>LOGIN</h1>
        <form name="login" action="login.php" method="POST">
        <?php include('errors.php'); ?>
            <input type="text" placeholder="Enter Your Username" class="form-input" autocomplete="off" name="username">
            <p class="error" id="username-error"> * Username is required ! </p>
        
            <input type="password" placeholder="Enter Your Password" class="form-input" autocomplete="off" name="password">
            <p class="error" id="password-error"> * Password is required ! </p>

            <button class="login-btn" type="submit" name="login_user"> Login</button>
        </form>

        <!--<p>or login with</p>
        <div class="social">
            <button>
                <i class="fa fa-facebook-square"></i> Facebook
            </button>
            <button>
                <i class="fa fa-google"></i> Google
            </button>
        </div>-->

          <p class="form-footer"> Not a member ? <a href="register.php"> Sign Up</a></p>
    </section>
    
    <!--<script src="login.js"></script>-->
</body>
</html>