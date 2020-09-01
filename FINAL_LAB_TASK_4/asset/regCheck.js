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

    else
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
    else if(email==)
    {

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




function PeMpty()
{ 
    var paswword = document.getElementById("password").value;

    if(paswword=="")
    {
        document.getElementById("passMsg").innerHTML="password field can't be empty";
        window.gvalid=false;

    }

    else
    {
        window.gvalid=true;
       
    }
}

function pRemover()
{
    document.getElementById("genderMsg").innerHTML="";
}


function Validate()
{
   
    if(window.nvalid==true && window.evalid==true && window.gvalid==true)
    {
       
        return true;
    }
    else
    {
        
        return false;
    }
    
}


