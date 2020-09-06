<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../asset/regCheck.js"></script>
    <title>SignUp</title>
    
</head>
<body>

	<form action="../php/regCheck.php" onsubmit=return validation() method="POST">
		<fieldset>
			<legend>SignUp</legend>
			<table>
			<tr>
					<td >Name</td>
                    <td><input type="text" id="name" name="name" onkeyup="nRemover()" onblur="neMpty()" ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td >Username</td>
                    <td><input type="text" id="uname" name="username" onkeyup="uRemover()" onblur="ueMpty()" ></td>
                    <td id="unameMsg"></td>
				</tr>
				<tr>
					<td>Password</td>
                    <td><input type="password" id="password" name="password" onkeyup="pRemover()" onblur="PeMpty()"></td>
                    <td id="passMsg"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
                    <td><input type="text" id="conNum" name="conNum" onkeyup="cRemover()" onblur="ceMpty()"></td>
                    <td id="contMsg"></td>
				</tr>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="Submit" ><a href="login.php">Login</a></td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
    </form>
    
   
</body>
</html>