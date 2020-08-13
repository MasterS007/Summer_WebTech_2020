<?php


    if(isset($_REQUEST['submit']))
    {
        setcookie('updated', "updated", time()-360000,"/");
        $targetdir ='profile_picture/'.$_FILES['picture']['name'];
        
        
        if(move_uploaded_file($_FILES['picture']['tmp_name'],$targetdir))
        {
            
            setcookie('updated', "updated", time()+360000,"/");
            header("location:profile.php");
        }
        else
        {
            echo "upload failed";
        }
    }
    else
    {
        header("location:profile.php");
    }


?>