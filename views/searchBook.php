<?php
    require_once('requires/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Search Book</title>
</head>
<body>
    <table width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color:white">Search Book</h2>
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
                <form method="POST">
                    <input type="search" placeholder="Search..." name="searchBook">
                    <input type="submit" name="submit" value="Search">
                    <input type="reset" name="reset" value="Reset">
                    <input type="submit" name="seeAllBooks" value="Show All">
                    
                </form>
                <table  align="center" cellpadding="10">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Catagory</th>
                    <th>Name of the Author(s)</th>
                    <th>Name of the Publisher</th>
                    <th>Edition</th>
                    <th>ISBN</th>
                    <th>The Number of Copies</th>       
            </td>
            <?php
                    if(isset($_POST['submit']))
                    {
                        $searchBook = $_POST['searchBook'];   
                        $data = file_get_contents("../db/book.json");  
                        $data = json_decode($data, true);  
                        foreach($data as $row)  
                            { 
                            if($row["bookId"] == $searchBook){
                                echo '<tr align="center" cellpadding="10">
                                <td>'.$row["bookId"].'</td>
                                <td>'.$row["bookName"].'</td>
                                <td>'.$row["catagory"].'</td>
                                <td>'.$row["authorName"].'</td>
                                <td>'.$row["publisherName"].'</td>
                                <td>'.$row["edition"].'</td>
                                <td>'.$row["isbn"].'</td>
                                <td>'.$row["noOfCopies"].'</td>
                                </tr>';
                                //break;  
                                }
                            }
                    }
                    else if(isset($_POST['seeAllBooks']))
                    { 
                        $data = file_get_contents("../db/book.json");  
                        $data = json_decode($data, true);  
                        foreach($data as $row){
                            if($row["bookId"] > '500'){
                                //print_r($row);
                                echo '<tr align="center" cellpadding="10">
                                <td>'.$row["bookId"].'</td>
                                <td>'.$row["bookName"].'</td>
                                <td>'.$row["catagory"].'</td>
                                <td>'.$row["authorName"].'</td>
                                <td>'.$row["publisherName"].'</td>
                                <td>'.$row["edition"].'</td>
                                <td>'.$row["isbn"].'</td>
                                <td>'.$row["noOfCopies"].'</td>
                                </tr>';
                                
                            }
                        }
                    }  
                    ?>
                </table>
        <tr></tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>
</body>
</html>