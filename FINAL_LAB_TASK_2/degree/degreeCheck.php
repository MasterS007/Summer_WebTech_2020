<?php

    if(isset($_POST['submit']))
    {
        if(!isset($_REQUEST['degree']))
        {
            
            echo "Invalid Degree!";
        }
        else {
            $degree = $_REQUEST['degree'];
            echo "Submit Successful!";
        }
  
    }
?>