<?php
    require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		if($user = delete($_GET['id']))
		{
			header('location:all_users.php');
		}
			
	}else{
		header('location:all_users.php');
	}

?>