<?php
//session_start();
if(isset($_POST['submit'])){
    require_once('../db/db.php');
   
//declaration
    $email = $_POST['email'];
    $password = $_POST['password'];
    /*$name ="";
    $data = file_get_contents("../db/librarian.json");  
    $data = json_decode($data, true);   */
    
    
//Validation
    if (empty($email) && empty($password)) {
        header ('location: ../views/login.php?message=both_empty');
    }
    else if($email == ""){
        header ('location: ../views/login.php?message=empty_email'); //Redirecting to Login Page because of empty Username
    }
    else if(empty($password)){
        header ('location: ../views/login.php?message=empty_password'); //Redirecting to Login Page because of empty Password
    }
    /* else {
            $userData = ["email" => $email, "password" => $password];
            $status = isValid($userData);
            print_r($status);exit;
            if(count($status)>0){
                session_start();
                $_SESSION['start'] = 'true';
                $_SESSION['name'] = $status['type'];


                /*$_SESSION['name'] = $userData['name'];
                $_SESSION['userId'] = $userData['userId'];
                $_SESSION['type'] = $userData['type'];*/

    /*            header ('location: ../views/dashboard.php'); //Redirecting to Homepage after successfull login.
            }
            else{
                header ('location: ../views/login.php?message=invalid_user'); 
        }
    } */
    else {
        function fetchNameById($conn, $userId)
        {
            $userId = trim($userId);
            $q1 = "SELECT name FROM userdata WHERE userId='$userId'";
            $result = mysqli_query($conn, $q1);
            $datas = mysqli_fetch_assoc($result);
            return $datas['name'];
        }
        $sql = "SELECT * FROM credentials WHERE email='$email' AND password = '$password'";
        $query=mysqli_query($conn, $sql);
        //$row = mysqli_fetch_assoc($query);
        //print_r($row);exit;
        if(mysqli_num_rows($query)>=1)
		{
		   	$user= mysqli_fetch_assoc($query);
            //print_r($user);exit;
            session_start();
            $_SESSION['start'] = 'true';
			$_SESSION['userId'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = fetchNameById($conn,$user['id']);
            //print_r($_SESSION);exit;  
            header ('location: ../views/dashboard.php');
        }
        else{
            header ('location: ../views/login.php?message=invalid_user'); 
    }
        
    }
}

else{
    //exit;
    header('location: ../views/login.php');
}


?>