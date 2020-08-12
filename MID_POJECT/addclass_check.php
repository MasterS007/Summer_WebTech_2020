<?php

if(isset($_REQUEST['submit']))
{
    $className =$_POST['class_name'];
    $choose_course;

    if(empty($className) || empty($_POST['choose_course']))
    {
        header("location:addClass.php");
       // echo "invalid";
    }
    else
    {
        header("location:dashboard.php");
        //echo "valid";
    }
}

?>