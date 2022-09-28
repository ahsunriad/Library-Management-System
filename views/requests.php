<?php
    require_once('requires/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color: white">Requests</h2>
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
               <h3>Any Book borrow or Member registration requests will apear here.</h3>
            </td>  <!-- Main -->

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>

</body>
</html>