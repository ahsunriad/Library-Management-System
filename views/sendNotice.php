<?php
    require_once('requires/header.php');
    $errorMsg=$message=''; 
    if(isset($_GET['message'])){
        if($_GET['message'] == 'sucessfull')
        {
            $message="Notice Sent Sucessfully!";
        }
        else if($_GET['message'] == 'error')
        {
            $errorMsg="Notice send failed";
            //$errorMsg="Notice empty!";
        }
        if($_GET['message'] == 'empty')
        {
            $errorMsg="Notice empty!";
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
    <title>Send Notice</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color: white">Send Notice</h2>
            </td>
        </tr>
        <tr >
            <td align="right" colspan="3">
                Welcome, <a href="profile.php"><b><?php echo $_SESSION['name']; ?></b></a> <a href="../controller/logout.php">Logout</a>
            </td>
			</tr>
        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: #808080;"><?php include_once 'requires/sidebar.php'; ?></td> 
            <td style="background-color: #ecf0f5;"> 
                <form method="POST" action="../controller/sendNoticeValidation.php">
                    <table align="center" width="30%" cellpadding="6">
                        <tr>
                            <!-- <td>Send Notice to</td>
                            <td>
                                <input type="radio" name="to" value="member">
                                   
                            </td>
                            <td>Member</td>
                            <td>
                                <input type="radio" name="to" value="Librarian">
                            </td>
                            <td>Librarian</td>
                            <td>
                                <input type="radio" name="to" value="all">
                            </td>
                            <td>All</td>
                        </tr> -->
                        <tr>
                            <td>Send Notice to</td>
                        <td>
							<select name="sendNoticeTo">
								<option value="-1">Select</option>
								<option value="member">Member</option>
                                <option value="librarian">Librarian</option>
                                <option value="all">All</option>
								</select>
							</td>
                        </tr>
                        <tr>
                            <td colspan="8"><input type="text" name="subject" id="subject" placeholder="Subject" size="80"></td>
                        </tr>
                        <tr>
                            <td colspan="8"><textarea name="notice" rows="7", cols="60" placeholder="Write your notice."></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="7" align="center"><input type="submit" name="submit" value="Send Notice"></td>
                            <td><span style="color:red"><?php echo $errorMsg; ?></span><span style="color:green"> <?php echo $message; ?></span></td>
                        </tr>
                </table>
                </form>
               
            </td>  <!-- Main -->

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>

</body>
</html>