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
            if(count($data)> 0)
            {
                
                if(isset($_POST['checkRemember']))
                {
                  setcookie('checkRemember',$_POST['checkRemember'], time()+360000, '/');
                  setcookie('uname', $uname, time()+315360000, '/');
                  setcookie('password', $password, time()+315360000, '/');
                  setcookie('status', "always ok", time()+315360000, '/');
                 // header('location: dashboard.php');
                 echo "login successfull";
                 
               }
               else
               {
                setcookie('uname', $uname, time()+3600, '/');
                setcookie('password', $password, time()+3600, '/');
                setcookie('name', $name, time()+3600, '/');
                
                $_SESSION['status']='OK';
                echo "login successfull";
                
                   // header('location: dashboard.php');

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