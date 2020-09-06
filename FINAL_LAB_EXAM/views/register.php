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

	<form action="../php/regCheck.php" onsubmit=return validation() method="post">
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
                    <td><input type="submit" name="submit" value="Submit" > <a href="login.php" style="display:none">Login</a></td>
                    <td></td>
				</tr>
			</table>
		</fieldset>
    </form>
    
    <!-- <script>
			function load(){

				var name = document.getElementById('name').value;
				var xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../php/regCheck.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name);
				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){

						if(this.responseText != ""){
							document.getElementById('emailMsg').innerHTML = this.responseText;
						}else{
							document.getElementById('emailMsg').innerHTML = "";
						}
						
					}	
				}
			}
		</script> -->
</body>
</html>