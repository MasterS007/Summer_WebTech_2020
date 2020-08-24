"use strict"

window.evalid=false;

function eMpty()
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

function Remover()
{
    document.getElementById("emailMsg").innerHTML="";
}

function Validate()
{
    if(window.evalid==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}