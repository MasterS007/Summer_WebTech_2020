<?php
session_start();

    if(isset($_POST['submit'])){

        $id		= $_POST['id'];
        $password 	= $_POST['password'];
        if(empty($id) || empty($password)){
            echo "null submission";

        }
        else{
            
            
            $file = fopen('user.txt', 'r');
			$data = fread($file, filesize('user.txt'));
	
			while(!feof($file)){
				$user = fgets($file);
                $user1 = explode('|', $data);
              //  $users = explode('/r/n', $data);
			}

			if(trim($user1[0]) == $id && trim($user1[3]) == $password){
				$_SESSION['status']  = "Ok";
				header('location: home.php');
				}
				else
				{
				echo "Invalid username/password";
				}
            
        }
}



else{
    header("location: login.php");
}

?>