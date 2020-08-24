<?php
  
   
   if(isset($_POST['submit']))
   {    
    $name = $_REQUEST['name'];
    $len = strlen($name);
    
    $nvalid = FALSE;
    if($name == NULL || $len<2)
    {
     $nvalid = FALSE;
    }
 
    elseif($len >= 2 && $name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z')
    {
         for($i = 1; $i<$len; $i++)
        {
              if($name>='A'&& $name<='Z' || $name>='a'&& $name<='z' || $name=='.' || $name=='-' )
              {
                   $nvalid = TRUE;
              }
 
              else {
                  $nvalid = FALSE;
              }
        }
 
    }
        
    else {
        $nvalid =FALSE;
    }
 
    if($nvalid == TRUE)
    {
        echo "Submit Successful!";
    }
    else {
        echo "Invalid Name!";
    } 

   }

   ?>