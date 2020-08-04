<?php
 
 session_start();
 if(isset($_POST['submit']))
 {

        $id = $_POST['id'];
        $name = $_POST['name'];
	    	$email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['confirmPassword'];
        $user = $_POST['user'];
        
        
        if(empty($name)||empty($email)||empty($password))
        {
            echo "null submission";
        }
        else if(empty($conpassword)||!isset($_POST['user']))
        {
          echo "null submission";

        }
        
        
        elseif($password != $conpassword)
        {
          echo "Warrning: Password and Confirm Password are not matched!";
          echo "Please, do registration again!";
        }
       

        else {

          if($_POST['gender']=='Male')
          {
            $gender = 'Male';
               
          }
          elseif($_POST['gender']=='Female')
          {
            $gender = 'Female';
          }

          elseif($_POST['gender']=='Other'){
            $gender = 'Other';
          }
          
         
              $file = fopen('user.txt', 'a');
			        fwrite($file,$id.'|'.$user.'|'. $name.'|'.$password.'|'.$email."/r/n");
              fclose($file);
              $_SESSION['info']="ok";
    
        
          header('location:login.php');
        }
    
      }
      else{
        header("location: login.php");
      }
?>