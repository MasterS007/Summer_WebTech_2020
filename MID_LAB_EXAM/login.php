<?php

session_start();
if(isset($_SESSION['status']))
{	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="logcheck.php" method="POST">
		<fieldset>
			<legend>SIGNIN</legend>
		<table>
			<tr>
				<td>User Id :</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Password :</td>
                <td><input type="password" name="password"></td>
               
            </tr>
           
		</table>
           
        <hr>
              <input type="checkbox" name="checkRemember">Remember Me
               <br><br>
              <input type="submit" name="submit" value="Submit"> <a href="forgotpass.html">Forgot Paswword?</a>
			
	
		</fieldset>
	</form>
</body>
</html>
                
<?php
}
else{
	header("location:login.php");
}

?>
	

