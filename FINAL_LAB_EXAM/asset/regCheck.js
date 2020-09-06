"use strict"

window.nvalid = false;
window.evalid = false;
window.gvalid = false;
var i;

function neMpty() {
    var name = document.getElementById("name").value;
    var lent = name.length;

    if (name == "") {
        document.getElementById("nameMsg").innerHTML = "field can't be empty";

        window.nvalid = false;
    } else {
        window.nvalid = true;
    }



}

function nRemover() {
    document.getElementById('nameMsg').innerHTML = "";

}

function ueMpty() {
    var uname = document.getElementById("uname").value;
    if (uname == "") {
        document.getElementById('unameMsg').innerHTML = "field can't be empty";
        window.evalid = false;
    } else {
        window.evalid = true;
    }

}

function uRemover() {
    document.getElementById('unameMsg').innerHTML = "";

}


function PeMpty() {
    var paswword = document.getElementById("password").value;

    if (paswword == "") {
        document.getElementById("passMsg").innerHTML = "password field can't be empty";
        window.gvalid = false;

    } else {
        window.gvalid = true;

    }
}

function PRemover() {
    document.getElementById("passMsg").innerHTML = "";
}

function ceMpty() {
    var conNum = document.getElementById("conNum").value;

    if (conNum == "") {
        document.getElementById("contMsg").innerHTML = "password field can't be empty";
        window.gvalid = false;

    } else {
        window.gvalid = true;

    }
}

function cRemover() {
    document.getElementById("contMsg").innerHTML = "";
}


function Validate() {

    if (window.nvalid == true && window.evalid == true && window.gvalid == true) {

        return true;
    } else {

        return false;
    }

}