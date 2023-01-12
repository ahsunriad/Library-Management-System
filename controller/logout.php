<?php
session_start();
session_destroy();
setcookie ('isValid', 'true', time() - 100, '/');  //Redeclaration of Cookie
setcookie('rememberMe', 'true',  time()-100000, '/');
header('location: ../views/login.php');  //Redirecting to login page.
?>