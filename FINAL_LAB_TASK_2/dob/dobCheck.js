"use strict"

window.nvalid=false;
var i;
 
 function eMpty()
 {
    var date = document.getElementById("date").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    
    if(date ==null|| month==null||year==null)
    {  
        document.getElementById("dobMsg").innerHTML="field can't be empty";
        
        window.nvalid =false;
    }

    else if((date>=1 && date<=31) && (month >=1 && month<=12) && (year >=1900 && year <=2016))
    {   
         
         window.nvalid =true;
        
    }
    
 
    else 
    {
        document.getElementById("dobMsg").innerHTML="must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";  
        window.nvalid =false;
    } 

    
 }

 
function Remover()
{
    document.getElementById("dobMsg").innerHTML = "";
    
}

function Validate()
{
   
    if(window.nvalid==true)
    {
       
        return true;
    }
    else
    {
        
        return false;
    }
    
}


