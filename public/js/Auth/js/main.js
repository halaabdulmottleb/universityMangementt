
    function loginfun() {
        var username = document.getElementsByName("username")[0].value ;
        var password = document.getElementsByName("password")[0].value ;
        var student =  ;
        if (username == "Toka1600437" && password == "0000" && document.getElementsByNamvaluee("user")[0].cheked()  ) {
        alert("login successful" ) ;
}
        else
            {
            alert("incorrect username or password" );
            
} 
    }
    // registration 
var firstName =document.getElementsByName("first")[0].value;
var lastName = document.getElementsByName("last")[0].value;
var email = document.getElementsByName("email")[0].value;
var phone = document.getElementsByName("phone")[0].value;
var code = document.getElementsByName("code")[0].value;
var id = document.getElementsByName("id")[0].value;
var phone_error=document.getElementById("phone_error");
var code_error = document.getElementById("code_error");
var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var id_error = document.getElementById("id_error");

/// validation 
function validate() {
    if (firstName == "" || lastName=="") {
        username.style.border = "1px solid red";
        name_error.textContent = "Name is required";
        username.focus();
        return false;
    }
}
