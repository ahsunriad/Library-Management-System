<?php
    require_once('requires/header.php');
    if(file_exists('../db/notices.json'))
           {   
              $data = file_get_contents("../db/notices.json");  
              $data = json_decode($data, true);
              $userData = [];
              foreach($data as $row)
              { 
                  if($row["to"] == $_SESSION['type']){
                      $userData[] = $row;
                  } 
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
    <title>Notices</title>
</head>
<body>
    <table width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <img src="../images/logo.png" style="float: left; height:auto; width:100px;">
                <h2 style="color: white">Notices</h2>
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
                    <table align="center" width="50%" cellpadding="10">
                        <tr>
                            <th>From</th>
                            <th>Date</th>
                            <th>Notice</th>
                        </tr>
                        
                        <?php
                            foreach($userData as $row){
                                    echo '<tr align="center" cellpadding="10">
                                    <td>'.$row['from'].'</td>
                                    <td>'.$row['date'].'</td>
                                    <td>'.$row['notice'].'</td>
                                    </tr>';
                            }
                        ?>
                         
                        
                    </table>
               
            </td>  <!-- Main -->

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>

</body>
</html>