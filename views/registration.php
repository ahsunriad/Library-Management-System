<?php
	$error=$nameError=$emailError=$phoneError=$passwordError=$conPasswordError=$genderError=$addressError=$sucess=$userTypeError=$ppError="";
	if(isset($_GET['message'])){
		if($_GET['message'] == 'sucess'){
			$sucess='Registration Sucessfull';
		}
		else if($_GET['message'] == 'all_empty'){
			$nameError='Name empty!';
			$emailError='Email empty!';
			$phoneError='Phone Number empty!';
			$passwordError='Password empty!';
			$conPasswordError='Confirm Password empty!';
			$genderError='Gender empty!';
			$addressError='Address empty!';
			$userTypeError='Register As empty!';
			$ppError='Profile Picture not selected';
		}
		else if($_GET['message'] == 'empty_name'){
			$nameError='Name empty!';
		}
		else if($_GET['message'] == 'empty_email'){
			$emailError='Email empty!';
		}
		else if($_GET['message'] == 'empty_phone'){
			$phoneError='User Name empty!';
		}
		else if($_GET['message'] == 'empty_password'){
			$passwordError='Password empty!';
		}
		else if($_GET['message'] == 'empty_conpassword'){
			$conPasswordError='Confirm Password empty!';
		}
		else if($_GET['message'] == 'empty_gender'){
			$genderError='Gender empty!';
		}
		else if($_GET['message'] == 'empty_registerAs'){
			$userTypeError='Date of Birth empty!';
		}
		else if($_GET['message'] == 'password_missmatch'){
			$conPasswordError='Confirm Password does not match!';
		}
		else if($_GET['message'] == 'empty_profilepic'){
			$ppError='Profile Picture not selected';
		}
		else if($_GET['message'] == 'failed'){
			$error='Please Try Again!';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
    <title>Registration</title>
</head>
<body>
	<table>
	<form action="../controller/registartionValidation.php" method="POST" enctype=multipart/form-data>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" onblur="return validateName(this.value)" onkeyup="return validateName(this.value)"> 
				<span id="nameError"><?=$nameError?></span></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="tel" name="phone" id="phone" onblur="return validatePhone(this.value)" onkeyup="return validatePhone(this.value)"> <span id="phoneError"><?=$phoneError?></span></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" id="email" placeholder="sample@example.com" onblur="return emailExists(this.value)"> <span id="emailError"><?=$emailError?></span></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" id="address" onblur="return validateAddress()" onkeyup="return validateAddress()"> <span id="addressError"><?=$addressError?></span></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" id="male" value="Male">Male
				<input type="radio" name="gender" id="female"value="Female">Female
				<input type="radio" name="gender" id="others"value="Others">Others
				<span><?=$genderError?></span>
			</td>
		</tr>
		<tr>
			<td>New Password</td>
			<td><input type="password" name="password" id="password" onblur="return validatePassword()" onkeyup=" return validatePassword()"> <span id="passwordError"><?=$passwordError?></span></td>
		</tr>
				
        <tr>
			<td>Confirm Password</td>
			<td><input type="password" name="conpassword" id="conpassword" onblur="return validateConPassword()" onkeyup=" return validateConPassword()"> <span id="conPasswordError"><?=$conPasswordError?></span></td>
		</tr>
        <tr>
			<td>Register as</td>
			<td>
				<input type="radio" name="userType" value="Owner">Owner
				<input type="radio" name="userType" value="Librarian">Librarian
				<input type="radio" name="userType" value="Member">Member
				<span id="userTypeError"><?=$userTypeError?></span>
			</td>
		</tr>
		<tr>
			<td>Profile Picture</td>
			<td><input type="file" name="pp" id="pp"> <span><?=$ppError?></span></td>
		</tr>
		<tr>
			<td><input type="reset" name="reset" id="reset"></td>
			<td><input type="submit" name="submit" id="submit" value="Register"></td>
		</tr>
	</form>
	</table>
	<script type="text/javascript" src="assets/js/registrationScript.js"></script>
</body>
</html>