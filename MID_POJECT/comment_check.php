<?php
    $showcom;
    if(isset($_POST['submit']))
    {
        $comments =$_POST["comment"];
        $len=filesize("comments.txt");
        #Posting a comment
        $comfile=fopen("comments.txt", "a");
        fwrite($comfile, $comments."/r/n");
        fclose($comfile);

        #Showing comment
       ;
        header("location:postComment.php");
    }
    else
    {
        echo "Comments first";
        
        //  #Showing comment
        //  $readcom =fopen("comments.txt","r");
       
         
        //  while(!feof($readcom))
        //  {
        //     $showcom =fgets($readcom, filesize('comments.txt'));
    
        //     foreach($showcom as $value)
        //     {
        //         setcookie("comments[allcom]", $value , time()+3600000,'/');
        //         print($_COOKIE['comments']);
               
        //     }   
        //   }
         
        //  fclose($readcom);
    }
?>