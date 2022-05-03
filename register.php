<?php include('database.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" type="image/x-icon" href="images/icon.PNG">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title> Sigup </title>
</head>
<body style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%), url(images/travel.png);";>
    <div class="container">
        <div class="header">
            <h2> Signup </h2>
        </div>
        <form method="post" action="register.php" class="form" >
        <?php include('errors.php'); ?>
            <div class="form-group">
                <label for="">UserName : </label>
                <input type="text" placeholder="username" name="username" autocomplete="off" value="<?php echo $username; ?>" required />
                <i class="ion-ios-checkmark"></i>
                <i class="ion-android-alert"></i>
                <span></span>
            </div>
            <div class="form-group">
                <label for="">Email : </label>
                <input type="text" placeholder="email" autocomplete="off" name="email" value="<?php echo $email; ?>" required />
                <i class="ion-ios-checkmark"></i>
                <i class="ion-android-alert"></i>
                <span></span>
            </div>
            <div class="form-group">
                <label for="">Phone Number : </label>
                <input type="text" placeholder="phonenumber" id = "phonenumber" autocomplete="off" required />
                <i class="ion-ios-checkmark"></i>
                <i class="ion-android-alert"></i>
                <span></span>
            </div>
            <div class="form-group">
                <label for="">Password : </label>
                <input type="password" placeholder="password" name="password_1" autocomplete="off" required />
                <i class="ion-ios-checkmark"></i>
                <i class="ion-android-alert"></i>
                <span></span>
            </div>
            <div class="form-group">
                <label for="">Confirm Password : </label>
                <input type="password" placeholder="confirm password" name="password_2" autocomplete="off" required />
                <i class="ion-ios-checkmark"></i>
                <i class="ion-android-alert"></i>
                <span></span>
            </div>
            <button type="submit" id="submit" name="reg_user">Register</button>
        </form>
    </div>
    <!--<script src="signup.js"></script>-->
</body>
</html>