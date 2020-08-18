<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add company</title>
</head>
<body>

	<form action="../php/company_controller.php" method="post">
		<fieldset>
			<legend>Create New Company</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
                <tr>
					<td>Company Website</td>
					<td><input type="text" name="comp_website"></td>
				</tr>
                <tr>
					<td>Company Logo</td>
					<td><input type="text" name="logo"></td>
				</tr>
                <tr>
					<td>user_acount_id</td>
					<td><input type="text" name="user_id"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>