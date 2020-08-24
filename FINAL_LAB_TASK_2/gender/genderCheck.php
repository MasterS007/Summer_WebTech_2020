<?php

    if(isset($_POST['submit']))
    {
        if(!isset($_REQUEST['gender']))
        {
            echo "Invalid Gender!";
        }
        else {
            $gender = $_REQUEST['gender'];
            echo "Successful Submit";
        }
    }
?>