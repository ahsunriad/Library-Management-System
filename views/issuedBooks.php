<?php
    require_once('requires/header.php');
    $message=$fileError=$bookIdError=$memberIdError=$returnDateError="";
    if (isset($_GET['message'])) {
        if($_GET['message']=='sucess'){  
            $message = "Book Issued";  
        }   
        else if($_GET['message']=='not_exists'){  
            $fileError = 'JSON File not exits';
        }
        else if($_GET['message']=='all_empty'){  
            $bookIdError = "Book Id empty!";
            $memberIdError = "Member Id empty!";
            $returnDateError = "Return Date empty!";
        }
        else if($_GET['message']=='empty_bookid'){  
            $bookIdError = "Book Id empty";
        }
        else if($_GET['message']=='empty_memberid'){  
            $memberIdError = "Member Id empty!";
        }
        else if($_GET['message']=='empty_returnDate'){  
            $returnDateError = "Return Date empty!";
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
    <title>Issue Books</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color: white">Issue Books</h2>
            </td>
        </tr>
        <tr >
            <td align="right" colspan="3">
                Welcome, <a href="profile.php"><b><?php echo $_SESSION['name']; ?></b></a> <a href="../controller/logout.php">Logout</a>
            </td>
			</tr>
        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: #808080;"><?php include_once 'requires/sidebar.php'; ?></td> 
            <td style="background-color: #ecf0f5;" align="center">
                <form method="POST" action="../controller/issuedBokValidation.php">
                    <table cellpadding="10">
                        <tr>
                            <td>Enter Book ID</td>
                            <td><input type="text" name="bookId" id="bookId" onblur="validateBookId(this.value)" onkeyup="validateBookId(this.value)"></td><td><span id="bookIdError"><?=$bookIdError?></span></td>
                        </tr>
                        <tr>
                            <td>Enter Member ID</td>
                            <td><input type="text" name="memberId" id="memberId" onblur="validateMemberId(this.value)" onkeyup="validateMemberId(this.value)"></td><td><span id="memberIdError"><?=$memberIdError?></span></td>
    
                        </tr>
                        <tr>
                            <td>Return Date</td>
                            <td><input type="date" name="returnDate" id="returnDate" onblur="validateReturnDate(this.value)" onkeyup="validateReturnDate(this.value)"></td><td><span id="returnDateError"><?=$returnDateError?></span></td>
                        </tr>
                        <tr>
                            <td align="right" colspan="2">
                                <input type="submit" name="submit" value="Issue Book">
                                <span style="color:green"> <?php echo $message; ?></span>
                                <span style="color:red"> <?php echo $fileError; ?></span>
                            </td>
                        </tr>
    
                    </table>
                </form>
            </td> 

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>
    <script src="assets/js/issuedBooksScript.js"></script>
</body>
</html>