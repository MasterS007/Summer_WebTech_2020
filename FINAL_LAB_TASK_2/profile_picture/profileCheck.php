<?php

    if(isset($_POST['submit']))
    {
        $userid = $_REQUEST['userId'];

        if($userid == NULL || !$_REQUEST['fileName'])
        {
            echo "Invalid Profile!";
        }

        elseif ($_REQUEST['fileName'] && $userid > 0) 
        {
        $file = $_REQUEST['fileName'];

        echo "Submit Successful!";
        }
    }
?>