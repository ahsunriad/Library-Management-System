<?php
    require_once('db.php');
    /* function isValid($userData){
        $conn=getConnection(); 
        $sql = "select * from users where email='{$userData['email']}' and password = '{$userData['password']}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        if($row>0){
            return $row;
        }
        else{
            return false;
        }
    } */
    function getById(){}

    function emailExists($conn, $email)
    {
	$q1 = "SELECT email FROM credentials WHERE email='$email'";
	$result = mysqli_query($conn, $q1);
	if (mysqli_num_rows($result)>0) {
		return true;
	}
	return false;
    }


?>