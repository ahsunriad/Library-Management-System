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
    <title>Member List</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color: white">Member Information</h2>
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
                
                <form action method="POST">
                    <input type="search" placeholder="Search..." name="searchMember">
                    <input type="submit" name="submit" value="Search">
                    <input type="reset" name="reset" value="Reset">
                    <input type="submit" name="seeAllMember" value="Show All">
                    
                </form> 
               <table  align="center" cellpadding="10">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Member Type</th>
                <th>Expire Date</th>
            </td>
           <?php
           if(isset($_POST['submit']))
           {
            $searchMember = $_POST['searchMember'];   
              $data = file_get_contents("../db/member.json");  
              $data = json_decode($data, true);  
                foreach($data as $row)  
                { 
                  //print_r($row);
                  if($row["userId"] == $searchMember){
                     echo '<tr align="center" cellpadding="10">
                      <td>'.$row["userId"].'</td>
                      <td>'.$row["name"].'</td>
                      <td>'.$row["email"].'</td>
                      <td>'.$row["gender"].'</td>
                      <td>'.$row["phone"].'</td>
                      <td>'.$row["address"].'</td>
                      <td>'.$row["memberType"].'</td>
                      <td>'.$row["expdate"].'</td>
                     </tr>';
                     break;  
                  }
              }
            }
            else if(isset($_POST['seeAllMember']))
           { 
              $data = file_get_contents("../db/member.json");  
              $data = json_decode($data, true);  
                foreach($data as $row)  
                { 
                  
                  if($row["userType"] == 'member'){
                     echo '<tr align="center" cellpadding="10">
                      <td>'.$row["userId"].'</td>
                      <td>'.$row["name"].'</td>
                      <td>'.$row["email"].'</td>
                      <td>'.$row["gender"].'</td>
                      <td>'.$row["phone"].'</td>
                      <td>'.$row["address"].'</td>
                      <td>'.$row["memberType"].'</td>
                      <td>'.$row["expdate"].'</td>
                     </tr>';
                       
                  }
              }
            }  
          ?>

          </table>
           
           

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>

</body>
</html>