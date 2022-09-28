<?php
    require_once('../views/requires/header.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['bookId']) && empty($_POST['memberId']) && empty($_POST['expectedReturnDate'])&& empty($_POST['returnedOn'])){
            header('location: ../views/returnedBooks.php?message=all_empty');
        }
        else if(empty($_POST['bookId'])){
            header('location: ../views/returnedBooks.php?message=empty_bookid');
        }
        else if(empty($_POST['memberId'])){
            header('location: ../views/returnedBooks.php?message=empty_memberid');
        }
        else if(empty($_POST['expectedReturnDate'])){
            header('location: ../views/returnedBooks.php?message=empty_expectedReturnDate');
        }
        else if(empty($_POST['returnedOn'])){
            header('location: ../views/returnedBooks.php?message=empty_returnedOn');
        }
        else if(empty($_POST['fine'])){
            header('location: ../views/returnedBooks.php?message=empty_fine');
        }
        else {}
    }