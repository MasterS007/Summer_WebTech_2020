<?php
	require_once('../dbCon/dataBaseCon.php');

	// function getByID($id){
	// 	$conn = dbConnection();

	// 	if(!$conn){
	// 		echo "DB connection error";
	// 	}

	// 	$sql = "select * from users where id={$id}";
	// 	$result = mysqli_query($conn, $sql);
	// 	$row = mysqli_fetch_assoc($result);
	// 	return $row;
	// }

    // function getEmail($email)
    // {
    //     $conn = dbConnection();

	// 	if(!$conn){
	// 		echo "DB connection error";
	// 	}

	// 	$sql = "select email from users where email like '%{$email}%'";
	// 	$result = mysqli_query($conn, $sql);
    //     $userEmail = mysqli_fetch_assoc($result);
        
    //     return $userEmail;
    // }
	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where username='{$user['username']}' and aut_password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
	}


	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "INSERT INTO users (aut_name, username, aut_password, contact) VALUES ('{$user['uname']}','{$user['username']}', '{$user['aut_password']}','{$user['contact']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($conn);
	}


	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>