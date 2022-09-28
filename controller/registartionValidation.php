<?php
    if (!isset($_POST['submit'])) {
        header('location: ../views/registration.php');
    }
    else{
        require_once('../db/usersService.php');
        //decalration
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $userType = $_POST['userType'];
        $photo = $_FILES['pp'];
        $hiredate = date("Y-m-d");
        //empty check
        if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['phone']) && empty($_POST['password']) && empty($_POST['cpassword']) && empty($_POST['gender']) && empty($_POST['userType'])&& empty($_POST['photo'])){
            header('location: ../views/registration.php?message=all_empty');
        }
        else if (empty($_POST['name'])){
            header('location: ../views/registration.php?message=empty_name');
        }
        else if (empty($_POST['email'])){
            header('location: ../views/registration.php?message=empty_email');
        }
        else if (empty($_POST['phone'])){
            header('location: ../views/registration.php?message=empty_phone');
        }
        else if (empty($_POST['address'])){
            header('location: ../views/registration.php?message=empty_address');
        }
        else if (empty($_POST['password'])){
            header('location: ../views/registration.php?message=empty_password');
        }
        else if (empty($_POST['conpassword'])){
            header('location: ../views/registration.php?message=empty_conpassword');
        }
        else if (empty($_POST['gender'])){
            header('location: ../views/registration.php?message=empty_gender');
        }
        else if (empty($_POST['userType'])){
            header('location: ../views/registration.php?message=empty_registerAs');
        }
        else if (empty($photo['name'])){
            header('location: ../views/registration.php?message=empty_profilepic');
        }
        else if ($_POST['password'] != $_POST['conpassword']){
            header('location: ../views/registration.php?message=password_missmatch');
        }
        //data validation and input
        else{
            //print_r($_FILES);exit;
            $file_extension = pathinfo($photo["name"], PATHINFO_EXTENSION);
            $q1 = "INSERT INTO credentials (password, email, type, userType) VALUES ('$password','$email', 1, '$userType')";
            if (mysqli_query($conn, $q1)) {
                $last_insert_id = mysqli_insert_id($conn);
                $unique_image_name = $last_insert_id.".".$file_extension;
                $photoSource = $photo['tmp_name'];
                $photoPath = "../images/".$unique_image_name;
                

                $q2 = "INSERT INTO userdata (userId, name, email, phone, address, gender,hiredate, image) 
                      VALUES ('$last_insert_id','$name','$email', $phone,'$address','$gender', '$hiredate','$photoPath')";
            	if (mysqli_query($conn, $q2)) {
					move_uploaded_file($photoSource, $photoPath);
					//print_r(mysqli_query($conn, $q2));exit;
                    $status = 1;
				}
                
                else{
					$status = 0;
				}
   		 	}    

            if($status = 1){ 
                header('location: ../views/registration.php?message=sucess');  
            }   
            else  
            {  
                header('location: ../views/registration.php?message=failed');
            } 
        }

    }
?>