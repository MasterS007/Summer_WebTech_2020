<?php
session_start();
if(isset($_POST['submit']))
    {
	   $currentPass = $_POST['curPass'];
	   $newPass = $_POST['newPass'];
	   $confPass =$_POST['confPass'];
	   $id = $_SESSION['id'];
       
	   if(empty( $currentPass)||empty($newPass)||empty($confPass))
	   {
		   echo "null submission";
	   }
       else
       {
            if($newPass != $confPass && $currentPass !=$_SESSION['password'])
            {
                echo "Warrning: Password are not matched!";
                
            }
            
           
            $file = fopen('user.txt', 'r');
            $valid = false;
            $user = $_SESSION['id'].'|'.$_SESSION['type'].'|'.$_SESSION['name'].'|'.$currentPass.'|'. $_SESSION['email'];
            $newfile = fopen('temp.txt', 'w');
        
               // while(!feof($file))
              //{
                $data = fread($file, filesize('user.txt')); 
                $sdata = explode("/r/n",$data);
                foreach($sdata as $values)
                { 
                   
                   if(trim($values) == trim($user))
                   {  
                       echo "matching";
                      $newdata = $_SESSION['id'].'|'.$_SESSION['type'].'|'.$_SESSION['name'].'|'.$newPass.'|'. $_SESSION['email'];
                      fwrite($newfile,trim($newdata)."/r/n");      
                   }
                   
                  
                    else if(trim($values)!= trim($user))
                    {
                        fwrite($newfile,trim($values)."/r/n"); 
                           
                    }
                    else
                    {
                        echo 'no change';
                    }

                } 

                  $valid = copy('temp.txt', 'user.txt');
                  //
                  
                  
                
                 if($valid==true)
                 {
                  
                   //echo 'sucessful';
                  fclose($newfile);
                  unlink('temp.txt');
                  fclose($file);
                  header('location:login.php');

                 }

                 else
                 {
                     echo "Invalid id/password";
                 }
            //}
         }  
	  
  
	}
    else
    {
	  header("location: login.php");
	}
?>