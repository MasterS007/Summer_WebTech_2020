
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
    var email_data = ''
    + 'check_email=' + window.encodeURIComponent('ON')
    + '&emailId=' + window.encodeURIComponent(email);
    var xhttp = new XMLHttpRequest();
    if(email=="")
    {
       document.getElementById("emailMsg").innerHTML="field can't be empty";
        window.evalid=false;
    }
    else if(email!="")
    {
        xhttp.open('POST', '../php/regCheck.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send(email_data);
        
		xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){

                        document.getElementById("emailMsg").innerHTML=this.responseText;
						
						
					}	
                 }
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
    document.getElementById("passMsg").innerHTML="";
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


