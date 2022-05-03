<?php include('database.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Users</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="images/icon.PNG">
        <link rel="stylesheet" href="css/user.css">
    </head>
    <body>
        <div class="home" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%), url(images/lake.png);
								 height:150vh;";>
        <header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="menu">
                 <li><a href="admin_home.html">Home</a></li>
                 <li><a href="admin_about.html">About Us</a></li>
                 <li><a href="admin_prof.html">Professionals</a></li>
                 <li><a href="admin_work.html">Our Works</a></li>
                 <li><a href="user.php"> Users</a></li>
                </ul>
            </nav>
</header>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>

                    <table style="margin-top:150px;">
                        <tr id="header" >
                            <th> Id </th>
                            <th> First Name </th>
							<th> Last Name</th>
							<th> Address </th>
							<th> Email </th>
                            <th> Contact No </th>
							<th> Professionals </th>
                        </tr>
						<?php
							$s="select * from hire";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
										<td>{$i}</td>
										<td>{$r["firstname"]}</td>
										<td>{$r["lastname"]}</td>
                                        <td>{$r["address"]}</td>
                                        <td>{$r["mail"]}</td>
                                        <td>{$r["contactNo"]}</td>
										<td>{$r["professional"]}</td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
                        </div>
    </body>
</html>