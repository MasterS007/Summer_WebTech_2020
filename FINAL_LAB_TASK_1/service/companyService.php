<?php
	require_once('../db/databaseCon.php');

	function getAllCompany(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user_company";
		$result = mysqli_query($conn, $sql);
		$company = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($company, $row);
		}

		return $company;
	}

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user_company where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user_company";
		$result = mysqli_query($conn, $sql);
		$company = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($company, $row);
		}

		return $company;
	}


	function insert($company){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into user_company values('', '{$company['company_name']}','{$company['profile_description']}', '{$company['industry']}', '{$company['company_website']}','{$company['company_logo']}','{$company['user_account_id']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function update($company){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update user_company set company_name='{$company['company_name']}',profile_description='{$company['profile_description']}', industry = '{$company['industry']}',company_website= '{$company['company_website']}', company_logo = '{$company['company_logo']}', user_account_id='{$company['user_account_id']}'  where id={$company['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
    }
    
    function delete($id){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM user_company WHERE id={$id}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>