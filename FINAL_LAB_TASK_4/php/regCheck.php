<?php
    require_once('../service/userService.php');
    if(isset($_POST['check_email']))
    {
        $email= $_POST['emailId'];

        if(isset($email))
        {
            $getemail = getEmail($email);
            if(!empty($getemail))
            {
                echo "email already exists!";
            }

            else
            {
                echo "seems good!";
            }
        }
    }

?>
<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
        }
        if(isset($email))
        {
            $getemail = getEmail($email);
            if($getemail)
            {
                return false;
            }
        }
        
        
        else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
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