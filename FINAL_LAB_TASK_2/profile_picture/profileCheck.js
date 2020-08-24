"use strict"

window.evalid=false;
window.uvalid=false;

function eMptyUser()
{
    var userId = document.getElementById("userId").value;
    
    if(userId==""  )
    {
       document.getElementById("userMsg").innerHTML="field can't be empty";
       
        window.uvalid=false;
    }

   
    else if (userId<0) 
    {
        document.getElementById("userMsg").innerHTML="invalid user id, must be positive";
        window.uvalid=false;
    }
    else
    {
        window.uvalid=true;
    }
}

function eMptyPicture()
{
    var picture = document.getElementById("fileName").value;
     if(picture=="")
    {
        document.getElementById("pictureMsg").innerHTML="picture can't be empty";
        
        window.evalid=false;
    }
    else
    {
        window.evalid=true;
    }

}

function Remover()
{
    document.getElementById("userMsg").innerHTML="";
    document.getElementById("pictureMsg").innerHTML="";
}

function Validate()
{
    if(window.evalid==true && window.uvalid==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}