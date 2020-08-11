<?php
 include_once 'dbconnection.php';
?>
<?php
session_start();

    if(isset($_POST['submit']))
    {

        $uname 		= $_POST['userName'];
        $password 	= $_POST['password'];

        if(empty($uname) || empty($password)){
            echo "null submission";

        }
        else if(!empty($uname) && !empty($password))
        {
            
           $sql = "SELECT * FROM users WHERE username = '".$uname."' AND u_password ='".$password."'";
           $result = mysqli_query($conn,$sql);
           $data =mysqli_fetch_assoc($result);
           $dob = explode('-',$data['date_of_birth']);

           $year= $dob[0];
           $month=$dob[1];
           $date =$dob[2];
            if(count($data)> 0)
            {
                
                if(isset($_POST['checkRemember']))
                {
                  setcookie('checkRemember',$_POST['checkRemember'], time()+360000, '/');
                  setcookie('uname', $uname, time()+315360000, '/');
                  setcookie('password', $password, time()+315360000, '/');
                  setcookie('name', $data['u_name'], time()+315360000, '/');
                  setcookie('email', $data['email'], time()+315360000, '/');
                  setcookie('gender', $data['gender'], time()+315360000, '/');
                  
                  setcookie('date', $date, time()+315360000, '/');
                  setcookie('month', $month, time()+315360000, '/');
                  setcookie('year', $year, time()+315360000, '/');
                  setcookie('remstatus', "always ok", time()+315360000, '/');
                  
                 
                  header('location: dashboard.php');
                // echo "login successfull";
                 
               }
               else if(empty($_POST['checkRemember']))
               {
                
                setcookie('checkRemember',$_POST['checkRemember'], time()-360000, '/');
                
                setcookie('uname', $uname, time()+3600, '/');
                setcookie('password', $password, time()+3600, '/');
                setcookie('name', $name, time()+3600, '/');
                setcookie('name', $data['u_name'], time()+3600, '/');
                setcookie('email', $data['email'], time()+3600, '/');
                setcookie('gender', $data['gender'], time()+3600, '/');

                setcookie('date', $date, time()+3600, '/');
                setcookie('month', $month, time()+3600, '/');
                setcookie('year', $year, time()+3600, '/');
                setcookie('remstatus', "always ok", time()-360000, '/');
                setcookie('status',"OK",time()+3600,'/');
                
               
              //  echo "login successfull";
                
                header('location: dashboard.php');

               }

               if($data['user_typ']=='Instructor')
               {
                   header("location:dashboard.php");
                   
               }
               else
               {
                   echo "User page is not available";
               }
            }
            else{
                echo "Invalid username/password";
            }
            mysqli_close($conn);
        }
        else{
            echo "Record not found!";
        }
}



else{
    header("location: login.php");
}

?>