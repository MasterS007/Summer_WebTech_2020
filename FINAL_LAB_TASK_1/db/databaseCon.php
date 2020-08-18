<?php
    $host="127.0.0.1";
    $dbuser="root";
    $dbpass="";
    $dbName="webtech-task";

    function dbConnection()
    {
        global $host;
        global $dbuser;
        global $dbpass;
        global $dbName;

        return $conn=mysqli_connect($host, $dbuser, $dbpass, $dbName);
    }
?>