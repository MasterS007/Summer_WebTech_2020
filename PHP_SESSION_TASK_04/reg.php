<?php
 
 session_start();
 if(isset($_POST['submit']))
 {

 
        $name = $_POST['name'];
        $uname = $_POST['userName'];
	    	$email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['confirmPassword'];
        $date =$_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        
        
        if(empty($name)||empty($uname)||empty($email)||empty($password))
        {
            echo "null submission";
        }
        else if(empty($conpassword)||!isset($_POST['gender'])||empty($date)||empty($month)||empty($year))
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

          else{
            $gender = 'Other';
          }
          
          $user = [
                
                'name'=>$name,
                'uname'=>$uname,
                'email'=>$email,
                'password'=>$password,
                'conpassword'=>$conpassword,
                'date'=>$date,
                'month'=>$month,
                'year'=>$year,
                'gender'=>$gender
              ];
    
          setcookie('name', $name, time()+36000, '/');
          setcookie('uname', $uname, time()+36000, '/');
          setcookie('email', $email, time()+36000, '/');
          setcookie('password', $password, time()+36000, '/');
          setcookie('conpassword', $conpassword, time()+36000, '/');
          setcookie('date', $date, time()+36000, '/');
          setcookie('month', $month, time()+36000, '/');
          setcookie('year', $year, time()+36000, '/');
          setcookie('gender', $gender, time()+36000, '/');
    
          header('location:login.html');
        }
    
      }
      else{
        header("location: login.html");
      }
?>