<?php include('database.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title> Professionals Registration Form.</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/hire.css">
  <link rel="icon" type="image/x-icon" href="images/icon.PNG">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  </head>
  <body style= "background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%), url(images/moon.JPG);
                  background-size: cover;
                  background-position: center;">
    
  <div class="navbar" style="background: transparent;
                             margin-top: 0;">
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="prof.html">BACK</a></li>
                </ul>
    </div>
  <?php

							if(isset($_POST["submit"]))
							{
                
								$sq="insert into hire(firstname, lastname, address, mail, contactNo,  professional) values ('{$_POST["firstname"]}','{$_POST["lastname"]}','{$_POST["address"]}','{$_POST["mail"]}','{$_POST["contactNo"]}','{$_POST["professional"]}')";
								if($db->query($sq))
								{
									echo"<script>window.open('Thankyou.html','_self');</script>";
							}	
            }
						?>
    <form method="POST" action="hire.php">
    
      <!-- Form contents will go here -->
      <fieldset>
        <h3 style=" text-align: center;">Personal Information</h3>
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname"  />
        
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname"   />
        
        <label for="address">Address</label>
        <input type="text" id="address" name="address" />

        <label for="mail">Email</label>
        <input type="email" id="mail" name="mail" />
        
        <label for="contactNo">Contact No</label>
        <input type="text" id="contactNo" name="contactNo" />
        
        <label for="professional"> Professional </label>
        <input type="radio" name="professional" value="Creative Designer" id="professional" required /> Creative Designer 
        <br>
        <br>
        <input type="radio" name="professional" value="Social Media Advicer" id="professional" required /> Social Media Advicer
        <br>
        <br>
        <input type="radio" name="professional" value="Sound Engineer" id="professional" required />Sound Engineer
        <br>
        <br>
       
    
      </fieldset>
      <button type="submit"  name="submit" id="submit" click(swal) style="text-align: center; 
                                                 border-radius: 5px;
                                                 font-weight: bold;
                                                 border: 2px solid #02a52a;
                                                 color: rgb(255, 255, 255);
                                                 background-color: #02a52a;
                                                 cursor: pointer;
                                                 overflow: hidden;  
                                                 position: relative;
                                                 font-family: system-ui">Submit Form</button>

</form>
      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
	        $(function()
          {
		        $('#submit').click(function(e)
            {
              var valid = this.form.checkValidity();
                if(valid)
                {
                  var firstname = $("#firstname").val();
                  var lastname = $("#lastname").val();
                  var address = $("#address").val();
                  var mail = $("#mail").val();
                  var contactno = $("#contactno").val();
                  var professional = $("#professional").val();
                  
                 
              else
                {
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                  })
                }
            });  
          });
            
      </script>
  
</body>
</html>