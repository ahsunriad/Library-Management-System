<?php
    require_once('requires/header.php');
    $message=$error=$idError=$bookNameError=$catagoryError=$authorNameError=$publisherNameError=$editionError=$isbnError=$noOfCopiesError=$bookCoverError='';   
    if (isset($_GET['message'])) {
        if($_GET['message']=='sucess'){  
            $message = "Book added";  
        }   
        else if($_GET['message']=='not_exists'){  
            $error = 'JSON File not exits';
        }
        else if($_GET['message']=='all_empty'){  
            $bookNameError = "Empty Book Name!";
            $catagoryError = "Empty Book Catagory!";
            $authorNameError = "Empty Author Name!";
            $publisherNameError = "Empty Book Publisher!";
            $editionError = "Empty Book Edition!";
            $isbnError = "Empty ISBN!";
            $noOfCopiesError = "Empty Book No. of Copies!";
            $bookCoverError = "Empty Book Cover!";
        }  
        else if($_GET['message']=='empty_name'){  
            $bookNameError = "Empty Book Name!";
        }
        else if($_GET['message']=='empty_catagory'){  
            $catagoryError = "Empty Book Catagory!";
        }
        else if($_GET['message']=='empty_author'){  
            $authorNameError = "Empty Author Name!";
        }
        else if($_GET['message']=='empty_publisher'){  
            $publisherNameError = "Empty Book Publisher!";
        }
        else if($_GET['message']=='empty_edition'){  
            $editionError = "Empty Book Edition!";
        }
        else if($_GET['message']=='empty_isbn'){  
            $isbnError = "Empty ISBN!";
        }
        else if($_GET['message']=='empty_noOfCopies'){  
            $noOfCopiesError = "Empty Book No. of Copies!";
        }
        else if($_GET['message']=='empty_cover'){  
            $bookCoverError = "Empty Book Cover!";
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
    <title>Add Book</title>
</head>
<body>
    <table width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2">
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color:white">Add Book</h2>
            </td>
        </tr>
        <tr>
            <td align="right" colspan="3">
                Welcome, <a href="profile.php"><b><?=$_SESSION['name']; ?></b></a> <a href="../controller/logout.php">Logout</a>
            </td>
			</tr>
        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: #808080;"><?php include_once 'requires/sidebar.php'; ?></td>  
            <td align="center" style="background-color: #ecf0f5;">
                <form method="POST" action="../controller/addBookValidation.php" enctype=multipart/form-data>
                <?php   
                     if(isset($error))  
                     {  
                        echo $error;  
                     }  
                     ?>  
                     <br /> 
                    <table>
                        
                        <tr>
                            <td>Name</td>
                            <td>
                                <input type="text" name="bookName" id="bookName" onblur="validateBookName()" onkeyup="validateBookName()">
                                <span id="bookNameError"> <?=$bookNameError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Catagory</td>
                            <td>
                                <input type="text" name="catagory" id="catagory" onblur="validateCatagory()" onkeyup="validateCatagory()">
                                <span id="catagoryError"> <?=$catagoryError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Name of the Author(s)</td>
                            <td>
                                <input type="text" name="authorName" id="authorName" onblur="validateAuthorName()" onkeyup="validateAuthorName()">
                                <span id="authorNameError"> <?=$authorNameError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Name of the Publisher</td>
                            <td>
                                <input type="text" name="publisherName" id="publisherName" onblur="validatePublisherName()" onkeyup="validatePublisherName()">
                                <span id="publisherNameError"> <?=$publisherNameError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Edition</td>
                            <td>
                                <input type="text" name="edition" id="edition" onblur="validateEdition()" onkeyup="validateEdition()">
                                <span id="editionError"> <?=$editionError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>ISBN</td>
                            <td>
                                <input type="text" name="isbn" id="isbn" onblur="validateISBN()" onkeyup="validateISBN()">
                                <span id="isbnError"> <?=$isbnError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>The Number of Copies</td>
                            <td>
                                <input type="text" name="noOfCopies" id="noOfCopies" onblur="validateNoOfCopies()" onkeyup="validateNoOfCopies()">
                                <span id="noOfCopiesError"> <?=$noOfCopiesError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Book Cover</td>
                            <td>
                            <input type="file" name="bookCover" id="bookCover" onblur="validateBookCover()" onkeyup="validateBookCover()">
                            <span id="bookCoverError"> <?=$bookCoverError; ?></span>
                            </td>
                        </tr>
                    </table>
                    <br><input type="submit" name="submit" value="Add Book"> 
                    <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
                </form>
            </td>  <!-- Main -->

        <tr></tr>
        <tr>
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>
    </table>
    <script type="text/javascript" src="assets/js/addBookScript.js"></script>
</body>
</html>