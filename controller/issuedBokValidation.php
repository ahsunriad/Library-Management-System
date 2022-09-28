<?php
    require_once('../views/requires/header.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['bookId']) && empty($_POST['memberId']) && empty($_POST['returnDate'])){
            header('location: ../views/issuedBooks.php?message=all_empty');
        }
        else if(empty($_POST['bookId'])){
            header('location: ../views/issuedBooks.php?message=empty_bookid');
        }
        else if(empty($_POST['memberId'])){
            header('location: ../views/issuedBooks.php?message=empty_memberid');
        }
        else if(empty($_POST['returnDate'])){
            header('location: ../views/issuedBooks.php?message=empty_returnDate');
        }
        else {
            if(file_exists('../db/issueBook.json') && file_exists('../db/member.json') && file_exists('../db/book.json'))  
                {  
                    $memberData = [];
                    $memberData = file_get_contents("../db/member.json");  
                    $memberData = json_decode($memberData, true);
                    foreach($memberData as $row){
                        if($row["userId"] == $_POST['memberId']  && $row["expdate"] > date("Y-m-d")){
                        $memberData = $row;
                        break;
                        }
                    }
                    $bookData = [];
                    $bookData = file_get_contents("../db/book.json");  
                    $bookData = json_decode($bookData, true);
                    foreach($bookData as $row){
                        if($row["bookId"] == $_POST['bookId']){
                        $bookData = $row;
                        break;
                        }
                    }
                    print_r($memberData);
                    echo "<br>";
                    print_r($bookData);
                    exit;
                    if(empty($memberData)){
                        header ('location:  ../views/issuedBooks.php?message=invalid_user'); //Redirecting to Login Page because Username & Password mismatch
                    }
                    else if(empty($bookData)){
                        header ('location:  ../views/issuedBooks.php?message=invalid_bookId'); //Redirecting to Login Page because Username & Password mismatch
                    }

                    $current_data = file_get_contents('../db/issuebook.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                            'bookId' => $_POST['bookId'],  
                            'memberId' => $_POST['memberId'],  
                            'issuedDate' => date("Y-m-d"),
                            'retunDate' => $_POST['returnDate']
                    );
                    
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);
                    if(file_put_contents('../db/issuebook.json', $final_data))  
                    {  
                        header('location: ../views/issuedBooks.php?message=sucess');  
                    }
                }
                else {
                    header('location: ../views/issuedBooks.php?message=not_exists');
                }
            } 
    }  
    else  
        {  
            header('location: ../views/issuedBooks.php');
        }

?>