
<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
        $name 		= $_POST['name'];
        $conTact = $_POST['conNum'];

		if(empty($username) || empty($password) || empty($name) || empty($conTact)){
			header('location: ../views/register.php?error=null_value');
        }
        
        else{

			$user = [
                'name'=> $name,
				'username'=> $username,
				'password'=> $password,
                'contact' => $conTact
			];

			$status = insert($user);

			if($status){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/register.php?error=db_error');
			}
		}
	}



?>