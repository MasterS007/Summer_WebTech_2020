"use strict"

window.nvalid=false;
window.evalid=false;
window.gvalid=false;
var i;
 
 function neMpty()
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

 
function nRemover()
{
    document.getElementById('nameMsg').innerHTML = "";
    
}

 function EeMpty()
 {
    var email = document.getElementById("email").value;
    var pos =email.search("@");
    var pos1 = email.search(".com");

    if(email=="")
    {
       document.getElementById("emailMsg").innerHTML="field can't be empty";
        window.evalid=false;
    }
    else if (pos==-1 || pos1==-1|| pos1 < pos) 
    {
        document.getElementById("emailMsg").innerHTML="invalid email must be like (sample@example.com)";
        window.evalid=false;
    }
    else
    {
        window.evalid=true;
    }
 }

 function eRemover()
{
    document.getElementById('emailMsg').innerHTML = "";
    
}




function geMpty()
{ 
    if(document.getElementById("Male").checked)
    {
        window.gvalid=true;
    }
    else if(document.getElementById("Female").checked)
    { 
        window.gvalid=true;
    }
    else if(document.getElementById("Other").checked)
    {
        window.gvalid=true;
    }
    else
    {
        document.getElementById("genderMsg").innerHTML="please choose a gender";
        window.gvalid=false;
       
    }
}

function gRemover()
{
    document.getElementById("genderMsg").innerHTML="";
}


function Validate()
{
   
    if(window.nvalid==true && window.evalid==true)
    {
       
        return true;
    }
    else
    {
        
        return false;
    }
    
}


