function validateName(name) {
    console.log(name);
    if(name.length <= 0){
        document.getElementById("nameError").innerHTML = "Name can't be empty";
        document.getElementById("name").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("nameError").innerHTML = "";
        //alert("alksjhflaos");
        return true;
    }
}
function validatePhone(phone) {
    if(phone <= 0){
        document.getElementById("phoneError").innerHTML = "Phone Number can't be empty";
        document.getElementById("phone").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("phoneError").innerHTML = "";
        document.getElementById("phone").style.borderColor = "";
        return true;
    }
}
function validateEmail() {
    var email = document.getElementById("email").value;
    if(email == ""){
        document.getElementById("emailError").innerHTML = "Email can't be empty";
        document.getElementById("email").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("emailError").innerHTML = "";return true;
    }
}
function validateAddress() {
    var address = document.getElementById("address").value;
    if(address == ""){
        document.getElementById("addressError").innerHTML = "Address can't be empty";
        document.getElementById("address").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("addressError").innerHTML = "";return true;
    }
}
function validatePassword() {
    var password = document.getElementById("password").value;
    if(password == ""){
        document.getElementById("passwordError").innerHTML = "Password can't be empty";
        document.getElementById("password").style.borderColor = "red";
        return false;
    } 
    else if(password.length < 6) {  
        document.getElementById("passwordError").innerHTML = "Password length must be atleast 8 characters";
        document.getElementById("password").style.borderColor = "red";  
        return false;  
    }
    else if(password.length > 15) {  
        document.getElementById("passwordError").innerHTML = "Password length must not exceed 15 characters";
        document.getElementById("password").style.borderColor = "red";  
        return false;  
    }   
    else{
        document.getElementById("passwordError").innerHTML = "";
        document.getElementById("password").style.borderColor = "green";return true;
    }
}
function validateConPassword() {
    var password = document.getElementById("password").value;
    var conpassword = document.getElementById("conpassword").value;
    if(conpassword== ""){
        document.getElementById("conPasswordError").innerHTML = "Confirm Password can't be empty";
        document.getElementById("conpassword").style.borderColor = "red";
        return false;
    }

    if(password != conpassword){
        document.getElementById("conPasswordError").innerHTML = "Password and Confirm Password doesn't match";
        document.getElementById("conpassword").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("conPasswordError").innerHTML = "";
        document.getElementById("conpassword").style.borderColor = "green";return true;
    }
}

function emailExists(email) {
    //var email = document.getElementById("email").value;
    xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/emailCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email);

    xhttp.onreadystatechange = function() {
        //alert(email);
      if(this.readyState == 4 && this.status == 200){
        console.log("JSON.parse(this.responseText)");
        //alert(email);
          var jsonData = JSON.parse(this.responseText);
          if (jsonData.success==false) {
              //alert('Sorry, This email already exists!');
              document.getElementById("emailError").innerHTML = "This email already exists!";
              return false;
          }else{
              alert('New asdfasdfasdf  email');
              return true;
          }
            //returnFunc(jsonData.success);
        }
    }
    //return returnState;
}