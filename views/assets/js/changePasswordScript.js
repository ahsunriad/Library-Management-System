//"user strict"
function validateCurrentPassword(){
    var currentPassword = document.getElementById("currentPassword").value;
    if(currentPassword.length <= 0){
        document.getElementById("errorCurrentPassword").innerHTML = "Current Password can't be empty!";
        document.getElementById("currentPassword").style.borderColor = "red";
    }
    else{
        document.getElementById("errorCurrentPassword").innerHTML = "";
    }
}
function validateNewPassword(){
    var newPassword = document.getElementById("newPassword").value;
    if(newPassword.length<=0){
        document.getElementById("errorNewPassword").innerHTML = "New Password can't be empty!";
        document.getElementById("newPassword").style.borderColor = "red";
    }
    else if(newPassword.length<6){
        document.getElementById("errorNewPassword").innerHTML = "New Password must be at least 6 characters long.";
    }
    else{
        document.getElementById("errorNewPassword").innerHTML = "";
    }
}
function validateRetypePassword(){
    var retypePassword = document.getElementById("retypePassword").value;
    var newPassword = document.getElementById("newPassword").value;
    if(retypePassword.length <=0){
        document.getElementById("errorRetypePassword").innerHTML = "Retype Password can't be empty";
        document.getElementById("retypePassword").style.borderColor = "red";
    }
    else if(retypePassword != newPassword){
        document.getElementById("errorRetypePassword").innerHTML = "New Password & Retype Password Doesn't match!"
        document.getElementById("retypePassword").style.borderColor = "red";
    }
    else{
        document.getElementById("errorRetypePassword").innerHTML = "";
        document.getElementById("newPassword").style.borderColor = "green";
        document.getElementById("retypePassword").style.borderColor = "green";
    }
}