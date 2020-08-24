"use strict"

window.gvalid=false;

function eMpty()
{ 
    var blood= document.getElementById("bloodgroup").value;

    if(blood=="")
    {
        document.getElementById("bloodMsg").innerHTML="please choose at least one";
        window.gvalid=false;
       
    }
    else
    {
        window.gvalid=true;
    }
}

function Remover()
{
    document.getElementById("bloodMsg").innerHTML="";
}


function Validate()
{
    if(window.gvalid==true)
    {
    
        return true;
    }
    else
    {
      
        return false;
    }
}