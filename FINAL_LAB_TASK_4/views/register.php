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

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td >Username</td>
                    <td><input type="text" id="name" name="username" onkeyup="nRemover()" onblur="neMpty()" ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td>Password</td>
                    <td><input type="password" id="password" name="password" onkeyup="pRemover()" onblur="PeMpty()"></td>
                    <td id="passMsg"></td>
				</tr>
				<tr>
					<td>Email</td>
                    <td><input type="text" id="email" name="email" onkeyup="eRemover()" onblur="EeMpty()"></td>
                    <td id="emailMsg"></td>
				</tr>
				<tr>
					<td></td>
                    <td><input type="button" name="submit" value="Submit" > <a href="login.php" style="display:none">Login</a></td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>