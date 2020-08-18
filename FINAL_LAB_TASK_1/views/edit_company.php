<?php
    require_once('../php/session_header.php');
    require_once('../service/companyService.php');
	if (isset($_GET['id'])) {
		$company = getByID($_GET['id']);	
	}else{
		header('location: all_company.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit company</title>
</head>
<body>

	<form action="../php/company_controller.php" method="post">
		<fieldset>
			<legend>Edit Company</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname" value="<?= $company['company_name']?>"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profile_description" value="<?=$company['profile_description']?>"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry" value="<?=$company['industry']?>"></td>
				</tr>
                <tr>
					<td>Company Website</td>
					<td><input type="text" name="comp_website" value="<?=$company['company_website']?>"></td>
				</tr>
                <tr>
					<td>Company Logo</td>
					<td><input type="text" name="logo" value="<?=$company['company_logo']?>"></td>
				</tr>
                <tr>
					<td>user_acount_id</td>
					<td><input type="text" name="user_id" value="<?=$company['user_account_id']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$company['id']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="all_company.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>