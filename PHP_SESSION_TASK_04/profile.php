<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
     <form>
		<br/>
		<table border ='1' cellpadding="0" cellspacing="0" >
			<tr>
				<td colspan='2'>Xcompany
					Logged in as <a href = "dashboard.php" name="username" > <?php echo $_COOKIE['uname']; ?></a>|
				<a href = "login.php" name="logout">Logout</a>
			</td>
			</tr>
			<tr>		
				<td>
				<p><b>Account</b></p>
				<hr>
					<ul>
					<li><a href="profile.php">View Profile</a></li>                             
					<li><a href="editprofile.html">Edit Profile</a></li>
					<li><a href="picture.html"></a>Change Profile Picture</li>
					<li><a href="change_password.html">Change Password</a></li>
					<li><a href="login.php">Logout</a></li>
					</ul>
				</td>
				<td> 
					<fieldset>
						<legend><b>PROFILE</b></legend>
						<table>
                            <tr>
								<td>Name</td>
								<td>:</td>
								<td><?php echo $_COOKIE['name'];?></td>
								<td rowspan="7" align="center">
									<img width="128" src="../image/user.png"/>
									<br/>
									<a href="../write/picture.html">Change</a>
								</td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?php echo $_COOKIE['email'];?></td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td><?php echo $_COOKIE['gender'];?></td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td><?php echo $_COOKIE['date']."/".$_COOKIE['month']."/".$_COOKIE['year'];?></td>
							</tr>
						</table>	
						<hr/>
						<a href="edit_profile.html">Edit Profile</a>	
					
				</fieldset>
			</table>
				
    </form>		
</body>
</html>