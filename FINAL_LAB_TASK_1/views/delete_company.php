<?php
    require_once('../php/session_header.php');
    require_once('../service/companyService.php');
	if (isset($_GET['id'])) {
		if($company = delete($_GET['id']))
		{
			header("location:all_company.php");
		}	
	}else{
		header('location:all_company.php');
	}

?>