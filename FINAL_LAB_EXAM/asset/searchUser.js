"user strict"

function searchAuth() {

    var searchBox = document.getElementById("searchBox").value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../php/user_check.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('search=' + searchBox);
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("table").innerHTML = this.responseText;


        }
    }
}