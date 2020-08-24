<?php

    if(isset($_POST['submit']))
    {
        $blood =$_REQUEST['blood'];
        
        if(empty($blood))
        {
            echo "Invalid Blood Group!";
        }
        else {
            
            echo "Submit Successful!";
        }
    }
?>