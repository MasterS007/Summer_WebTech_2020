<?php
   
   $name = $_REQUEST['name'];
  
   $len = strlen($name);
   
   $nvalid = FALSE;

#Name Validation
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
   
   #Email Validation
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
   

   #Gender Validation
   
   

   if(!isset($_REQUEST['gender']))
   {
       echo "Invalid Gender!";
   }
   else {
       $gender = $_REQUEST['gender'];
       echo "Successful Submit";
   }


#DOB Validation
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


#Degree Validation

if(!isset($_REQUEST['degree']))
{
    
    echo "Invalid Degree!";
}
else {
    $degree = $_REQUEST['degree'];
    echo "Submit Successful!";
}
  

  #Blood Group Validation
  $blood =$_REQUEST['blood'];

  if(empty($blood))
  {
      echo "Invalid Blood Group!";
  }
  else {
      
      echo "Submit Successful!";
  }


#Profile Picture validation

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

?>
   