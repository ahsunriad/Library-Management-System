<?php
if (isset($_POST['email'])) {
    require_once('db.php');
    require_once '../db/usersServices.php';
	$emailExists = emailExists($conn, $_POST['email']);
	if ($emailExists==true) {
		echo json_encode(array('success'=>false));
	}else{
		echo json_encode(array('success'=>true));
	}
}












?>