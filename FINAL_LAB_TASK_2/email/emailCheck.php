<?php

    if(isset($_POST['submit']))
    {
        $email = $_REQUEST['email'];
    $evalid = FALSE;
    $pos =strpos($email, '@');
    $pos1 = strpos($email, ".com");

    if($email == NULL)
    {
        echo "Invalid Email!";
    }

    elseif ($pos!=False && $pos1!=False && $pos1 > $pos) {
            
                echo "Submit Successful!";
    }
    else {
        echo "Invalid Email!";
    }
    }
?>