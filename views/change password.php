<?php
    require_once('requires/header.php');
    $errorMsg=$errorCurrentPassword=$message=$errorNewPassword=$errorRetypePassword='';
    $newPassword=$retypePassword="";
    if (isset($_GET['message'])) {
        if($_GET['message']=='sucessfull'){  
            $message="Password changed sucessfully.";  
        }   
        else if($_GET['message']=='not_exists'){  
            $errorMsg="Error occured with database during update!";
        }
        else if($_GET['message']=='empty_currentpassword'){  
            $errorCurrentPassword = "Current Password can't be empty!";
        }
        else if($_GET['message']=='all_empty'){  
            $errorCurrentPassword = "Current Password can't be empty!";
            $errorNewPassword="New Password can't be empty!";
            $errorRetypePassword="Retype Password can't be empty!";
        }  
        else if($_GET['message']=='empty_newpassword'){  
            $errorNewPassword="New Password can't be empty!";
        }
        else if($_GET['message']=='empty_retypepassword'){  
            $errorRetypePassword="Retype Password can't be empty!";
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
    <title>Change Password</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color: white">Change Password</h2>
            </td>
        </tr>
        <tr >
            <td align="right" colspan="3">
                Welcome, <a href="profile.php"><b><?php echo $_SESSION['name']; ?></b></a> <a href="../controller/logout.php">Logout</a>
            </td>
			</tr>
        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: #808080;"><?php include_once 'requires/sidebar.php'; ?></td> 
            <td align="center" style="background-color: #ecf0f5;"> 
               <table>
               <form method="POST" action="../controller/change password validation.php">
                    <tr>
                        <td>Current Password</td>
                        <td><input type="password" name="currentPassword" id="currentPassword" onblur="validateCurrentPassword()" onkeyup="validateCurrentPassword()"> 
                            <span id="errorCurrentPassword"> <?=$errorCurrentPassword; ?></span></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input type="password" name="newPassword" id="newPassword" onblur="validateNewPassword()" onkeyup="validateNewPassword()"> 
                            <span id="errorNewPassword"style="color:red"> <?=$errorNewPassword; ?></span></td>
                    </tr>
                    <tr>
                        <td>Re-Type Password</td>
                        <td><input type="password" name="retypePassword" id="retypePassword" onblur="validateRetypePassword()" onkeyup="validateRetypePassword()"> 
                            <span id="errorRetypePassword"> <?=$errorRetypePassword; ?></span></td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" name="submit" value="Update"></td>
                        <td><span> <?=$errorMsg; ?></span>
                            <span style="color:green"> <?=$message; ?></span></td>
                    </tr>
                </form>
               </table>
            </td>  

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>
    <script type="text/javascript" src="assets/js/changePasswordScript.js"></script>
</body>
</html>