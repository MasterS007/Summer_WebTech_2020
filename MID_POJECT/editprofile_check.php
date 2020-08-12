<?php

if(isset($_POST['submit']))
{
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $date =$_POST['date'];
	   $month = $_POST['month'];
	   $year = $_POST['year'];
	   $gender=$_POST['gender'];
	   
	   
	   if(empty($name)||empty($email)||!isset($_POST['gender'])||empty($date)||empty($month)||empty($year))
	   {
		   echo "null submission";
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
		
  
		setcookie('name', $name, time()+3600, '/');
		setcookie('email', $email, time()+3600, '/');
		setcookie('date', $date, time()+3600, '/');
		setcookie('month', $month, time()+3600, '/');
		setcookie('year', $year, time()+3600, '/');
		setcookie('gender', $gender, time()+3600, '/');
  
		header('location:profile.php');
	  }
  
	}
	else{
	  header("location: profile.php");
	}
?>