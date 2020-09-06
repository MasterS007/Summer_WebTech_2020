<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../asset/searchUser.js"></script>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/create.php">Create New User</a> |
	<a href="../views/all_users.php">User List</a> |
	<a href="../php/logout.php">Logout</a> 
	<input type="text" id="searchBox" name="searchBox" placeholder="search by author name">
</body>
</html>