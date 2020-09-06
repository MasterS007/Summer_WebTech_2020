<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="profile.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Profile</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Author Name</td>
            <td>Author Id</td>
			<td>Username</td>
			<td>Password</td>
			<td>Writings</td>
			<td>Action</td>
		</tr>

		<?php  
			$author = getByUsername($username);
			for ($i=0; $i != count($company); $i++) {  ?>
		<tr>
			<td><?=$author[$i]['id']?></td>
			<td><?=$authory[$i]['company_name']?></td>
			<td><?=$author[$i]['profile_description']?></td>
			<td><?=$author[$i]['industry']?></td>
			<td>
                <a href="<?=$company[$i]['company_website']?>"><?=$company[$i]['company_website']?></a>
            </td>
            <td><img src="<?=$company[$i]['company_logo']?>" style="height:40px; weidth:30px"></td>
			<td><?=$company[$i]['user_account_id']?></td>
			<td>
				<a href="edit_company.php?id=<?=$company[$i]['id']?>">Edit</a> |
				<a href="delete_company.php?id=<?=$company[$i]['id']?>"><input type="button" style="background-color:white; border:none; color:blue; cursor:pointer; text-decoration: underline; " value="Delete" onclick="return confirm('Are you want to delete <?=$company[$i]['company_name']?>?')" ></a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>