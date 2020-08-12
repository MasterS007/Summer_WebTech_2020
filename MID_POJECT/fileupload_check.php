<?php

    if(isset($_POST['submit']))
    {
        $file_dir='Class_Materials/'.$_FILES['allfiles']['name'];
        //print_r($_FILES);
        
        if(move_uploaded_file($_FILES['allfiles']['tmp_name'], $file_dir))
        {
            header("location:files.php");
        }
        else
        {
            echo "Upload Failed";
        }
    }
?>