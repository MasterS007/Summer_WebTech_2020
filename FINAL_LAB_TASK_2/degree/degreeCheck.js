"use strict"

window.gvalid=false;

function eMpty()
{ 
    if(document.getElementById("SSC").checked)
    {
        window.gvalid=true;
    }
    else if(document.getElementById("HSC").checked)
    { 
        window.gvalid=true;
    }
    else if(document.getElementById("BSc").checked)
    {
        window.gvalid=true;
    }
    else
    {
        document.getElementById("degreeMsg").innerHTML="please choose at least one degree";
        window.gvalid=false;
       
    }
}

function Remover()
{
    document.getElementById("degreeMsg").innerHTML="";
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