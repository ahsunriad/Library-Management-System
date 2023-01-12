"user strict"

function validateEmail(){
    var email = document.getElementById("email").value;
    if(email == ""){
        document.getElementById("emailError").innerHTML = "Email can't be empty!"
        //document.getElementById("emailError").style.color = "red"
    }
    else{
        document.getElementById("emailError").innerHTML = ""; 
    }
}function validatePassword(){
    var password = document.getElementById("password").value;
    if(password == ""){
        document.getElementById("passwordError").innerHTML = "Password can't be empty!"
        //document.getElementById("emailError").style.color = "red"
    }
    /* else if(password.length<6){
        document.getElementById("passwordError").innerHTML = "Password must be at leat 6 characters long."; 
        //alert("Password must be at leat 6 characters long.");
    } */
    else{
        document.getElementById("passwordError").innerHTML = "";
    }
}