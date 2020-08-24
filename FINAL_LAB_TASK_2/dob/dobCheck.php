<?php

    if(isset($_POST['submit']))
    {

        $date = $_REQUEST['date'];
        $month = $_REQUEST['month'];
        $year = $_REQUEST['year'];

        if($date == NULL || $month==NULL || $year== NULL)
        {
            echo "Invalid Date of Birth!";
        }

        elseif(($date>=1 && $date<=31) && ($month >=1 && $month<=12) && ($year >=1900 && $year <=2016))
        {
            echo "Successful Submit!";
        }
        else {
            echo "Invalid Date of Birth!";
        }
    }
?>