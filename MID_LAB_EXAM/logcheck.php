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
			$user = explode('|', $data);
			$users = explode('/r/n', $data);
			$counts=0;
			echo count($users);
			while($counts<(count($users)-1))
			{

				$data = $users[$counts];
				$user = explode('|', $data);
				
				echo $counts;
				$counts=$counts+1;
			}


			if(trim($user[0]) == $uname && trim($user[3]) == $password){
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