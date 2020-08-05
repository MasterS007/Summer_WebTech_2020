<?php
session_start();

    if(isset($_POST['submit'])){

        $id		= $_POST['id'];
        $password = $_POST['password'];
        if(empty($id) || empty($password)){
            echo "null submission";

        }
        else{
            
            $valid = false;
            
            $file = fopen('user.txt', 'r');
			//$data = fread($file, filesize('user.txt'));
           
            while(!feof($file))
            {
                $data = fgets($file,filesize('user.txt') );
                $users = explode("/r/n",trim($data,"/r/n") );
               //print_r($users);
                foreach($users as $values)
                {
                    print($values);
                    $user=explode('|',$values);
                    //print_r($user);
                    if(trim($user[0]) == $id && trim($user[3]) == $password)
                     {
                       // print($user[0]);
                        //print($user);
                        $_SESSION['id']=trim($user[0]);
                        $_SESSION['name']=trim($user[2]);
                        $_SESSION['email']=trim($user[4]);
                        $_SESSION['type']=trim($user[1]);
                        $_SESSION['password']=trim($user[3]);
                        $_SESSION['status']  = "Ok";
                        $valid = true;
                    break;
                        
                     } 
                     else
                     {
                        $valid = false;
                     }

                    
                 }
                 
                 if($valid==true)
                 {
                    
                    header('location:home.php');

                 }

                 else
                 {
                     echo "Invalid id/password";
                 }
            }
            
        }
}

else{
    header("location: login.php");
}

?>