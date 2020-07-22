<?php
   
   $name = $_REQUEST['Name'];
   $len = strlen($name);
   
   $valid = FALSE;

   if($name == NULL || $len<2)
   {
    $valid = FALSE;
   }
   

   elseif($len >= 2 && $name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z')
   {
        for($i = 1; $i<$len; $i++)
       {
             if($name>='A'&& $name<='Z' || $name>='a'&& $name<='z' || $name=='.' || $name=='-' )
             {
                  $valid = TRUE;
             }

             else {
                 $valid = FALSE;
             }
       }

   }
       
   else {
       $valid =FALSE;
   }



   


   if($valid == TRUE)
   {
       echo "Submit Successful!";
   }
   else {
       echo "Invalid Name!";
   }
   
   





?>