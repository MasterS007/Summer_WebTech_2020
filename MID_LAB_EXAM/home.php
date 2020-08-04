<?php
   session_start();

    if(isset($_SESSION['status']))
    {
        ?>
        
        <!DOCTYPE html>
        <html>
        <head>
            <title>Home</title>
        </head>
        <body>
            <fieldset style="padding-right:50px; width:250px;">
            <p style="text-align:center; font-size:20px; padding-left:28px;"><b> Welcome     <?php echo $_SESSION['name'].'!';?></b></p>

            <ul style="text-align:center; list-style: none;">
                        <li><a href="profile.php">Profile</a></li>  
                        <li><a href="change_password.php">Change Password</a></li>
                        <li><a href="viewusers.html">View Users</a></li>
                        <li>
                        <a href="logout.php">Logout</a>
                        </li>
            </ul>

           
            </fieldset>
                        
        </body>
        </html>
        <?php
	 }

  else
  {
    header("location:login.php");
  }

?>