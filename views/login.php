<?php
    $emailError=$passwordError=$error="";
    if (isset($_GET['message'])) {
        if ($_GET['message'] == "both_empty") {
            $emailError="Empty Email!";
            $passwordError= "Empty Password!";
        }
        if ($_GET['message'] == "invalid_user") {
            $error = "Invalid Email or Password!";
        }
        if($_GET['message'] == "empty_email"){
            $emailError= "Empty Email!";
        } 
        else if($_GET['message'] == "empty_password"){
            $passwordError= "Empty Password!";
        }
    }
    /* if (isset($_COOKIE['rememberMe']) || isset($_COOKIE['isValid'])) {
        header('location: dashboard.php');
    }  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <form id="loginForm" method="POST" action="../controller/loginCheck.php">
            <fieldset>
                    <table align="center">
                        <tr>
                            <td>Email</td>
                            <td><input type="text" id="email" name="email" onblur="validateEmail()" onkeyup="validateEmail()"> <span id="emailError" style="color:red;"><?=$emailError?></span></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="password" name="password" onblur="validatePassword()" onkeyup="validatePassword()"> <span id="passwordError" style="color:red;"><?=$passwordError?></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="rememberMe"></td>
                            <td>Remeber me</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit"></td>
                            <td><span id="error"><?=$error?></span></td>
                        </tr>
                </table>
            </fieldset>
        
        
    </form>
    <script type="text/javascript" src="assets/js/loginScript.js"></script>
</body>
</html>