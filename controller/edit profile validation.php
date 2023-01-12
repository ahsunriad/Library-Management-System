<?php
    require_once('../views/requires/header.php');
    if(isset($_POST['submit'])){
        require_once('../db/db.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $userId = $_SESSION['userId'];
        if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['phone']) && empty($_POST['address'])){
            header('location: ../views/edit profile.php?message=all_empty');
        }
        else if(empty($_POST['name']))
        {
            header('location: ../views/edit profile.php?message=empty_name');
        }
        else if(empty($_POST['email']))
        {
            header('location: ../views/edit profile.php?message=empty_email');
        }
        else if(empty($_POST['phone']))
        {
            header('location: ../views/edit profile.php?message=empty_phone');
        }
        else if(empty($_POST['address']))
        {
            header('location: ../views/edit profile.php?message=empty_address');
        }
        else{
            $q1 = "UPDATE userdata SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$userId'";
            if (mysqli_query($conn, $q1)) {
                //print_r(mysqli_query($conn, $q1));exit;
                header('location: ../views/edit profile.php?message=sucessfull');
            }
            else{
                header('location: ../views/edit profile.php?message=not_exists');
            }
        }
        /* else{
            if (file_exists('../db/librarian.json')){  
                $data = file_get_contents("../db/librarian.json");  
                $data = json_decode($data, true);  
                
                foreach($data as $key => $value)  
                {

                    if($value['userId']==$_SESSION['userId']){
                            $data[$key]['name'] = $_POST['name'];
                            $data[$key]['email'] = $_POST['email'];
                            $data[$key]['phone'] = $_POST['phone'];
                            $data[$key]['address'] = $_POST['address'];
                    }

                }
                $userData = json_encode($data);
                file_put_contents('../db/librarian.json', $userData);
                header('location: ../views/edit profile.php?message=sucessfull');
                $message="Profile Updated sucessfully.";
            }
            else  
            {  
                header('location: ../views/edit profile.php?message=not_exists');
            }
        } */
    }
    else  
    {  
        header('location: ../views/login.php');
    } 
?>