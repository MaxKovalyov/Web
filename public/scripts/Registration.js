function checkLogin(login) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('POST','/registration/checkLogin',true);
    xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xmlhttp.send("login="+encodeURIComponent(login));
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState==4) {
            if(xmlhttp.status==200) {
                if(xmlhttp.responseText) document.getElementById("error").innerHTML = "Логин занят!";
                else document.getElementById("error").innerHTML = "";
            }
        }
    };
}