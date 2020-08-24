"use strict"

window.gvalid=false;

function eMpty()
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

function Remover()
{
    document.getElementById("genderMsg").innerHTML="";
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