"use strict"

window.nvalid=false;
var i;
 
 function eMpty()
 {
    var name = document.getElementById("name").value;
    var lent =name.length;
    
    if(name == "")
    {  
        document.getElementById("nameMsg").innerHTML="field can't be empty";
        
        window.nvalid =false;
    }

    else if( (name>='A' && name<='Z' || name>='a'&& name<='z') && lent< 2)
    {   
         document.getElementById("nameMsg").innerHTML="length can't be less then 2";  
         window.nvalid =false;
        
    }
    
    else if(name>= '0' && name<= '9'||name=='+'||name=='-'||name=='*'||name=='/'||name=='='||name=='@'||name=='$'||name=='%'||name=='!'||name=='|'||name=='?' )
    {
        
        document.getElementById("nameMsg").innerHTML="name must be characters (a-z,A-Z, dot(.) or dash(-)) ";
        
        window.nvalid =false;
    }
    
 
    else if( name>='A' && name<='Z' || name>='a'&& name<='z')
    {
        
                window.nvalid =true;
    } 

    
 }

 
function Remover()
{
    document.getElementById('nameMsg').innerHTML = "";
    
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


