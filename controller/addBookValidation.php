<?php
    require_once('../views/requires/header.php');
if(isset($_POST['submit'])){
    require_once('../db/db.php');
    //Declaration
    $bookName = $_POST['bookName'];
    $catagory = $_POST['catagory'];
    $authorName = $_POST['authorName'];
    $publisherName = $_POST['publisherName'];
    $edition = $_POST['edition'];
    $isbn = $_POST['isbn'];
    $noOfCopies = $_POST['noOfCopies'];
    $photo = $_FILES['bookCover'];
    $userId = $_SESSION['userId'];
    //$userId = "5";

    //Emmpty Check Validation
        if($_POST['bookName'] == "" && $_POST['catagory'] == "" && $_POST['authorName'] == "" && $_POST['publisherName'] == "" && $_POST['edition'] == "" && $_POST['isbn'] == "" && $_POST['noOfCopies'] == "" && $_POST['bookCover'] == "")
        {
            header('location: ../views/addBook.php?message=all_empty');
        }
        else if($_POST['bookName'] == ""){
            header('location: ../views/addBook.php?message=empty_name');   
        }
        else if($_POST['catagory'] == ""){
            header('location: ../views/addBook.php?message=empty_catagory');
        }
        else if($_POST['authorName'] == ""){
            header('location: ../views/addBook.php?message=empty_author');
        }
        else if($_POST['publisherName'] == ""){
            header('location: ../views/addBook.php?message=empty_publisher');
        }
        else if($_POST['edition'] == ""){
            header('location: ../views/addBook.php?message=empty_edition');
        }
        else if($_POST['isbn'] == ""){
            header('location: ../views/addBook.php?message=empty_isbn');
        }    
        else if($_POST['noOfCopies'] == ""){
            header('location: ../views/addBook.php?message=empty_noOfCopies');
        }
/*         else if($_POST['bookCover'] == ""){
            header('location: ../views/addBook.php?message=empty_cover');
        } */
        /* else {
            if(file_exists('../db/book.json'))  
                {  
                    $current_data = file_get_contents('../db/book.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                            'bookId' => $_POST['bookId'],  
                            'bookName' => $_POST['bookName'],  
                            'catagory' => $_POST['catagory'],
                            'authorName' => $_POST['authorName'],
                            'publisherName' => $_POST['publisherName'],
                            'edition' => $_POST['edition'],
                            'isbn' => $_POST['isbn'], 
                            'noOfCopies' => $_POST['noOfCopies'],
                            'bookCover' => $_POST['bookCover']
                    );
                    
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);
                    if(file_put_contents('../db/book.json', $final_data))  
                    {  
                        header('location: ../views/addBook.php?message=sucess');  
                    }
                }   
                else  
                {  
                    header('location: ../views/addBook.php?message=not_exists');
                } 
        } */
        else{
            $file_extension = pathinfo($photo["name"], PATHINFO_EXTENSION);

            $q1 = "INSERT INTO books (userId, name, authorName, isbn, edition, noOfCopies, catagory, bookCover) 
                    VALUES ('$userId','$bookName', '$authorName', '$isbn', '$edition', '$noOfCopies', '$catagory', '$photoPath')";
            //$row = mysqli_query($conn, $q1);
            //print_r($row);exit;
            
            if (mysqli_query($conn, $q1)) {
                //print_r(mysqli_query($conn, $q1));exit;
                $last_insert_id = mysqli_insert_id($conn);
                $unique_image_name = $last_insert_id.".".$file_extension;
                $photoSource = $photo['tmp_name'];
                $photoPath = "../images/books/".$unique_image_name;
                //print_r($photoPath);exit;
				move_uploaded_file($photoSource, $photoPath);
                $status = 1;
   		 	}    

            if($status = 1){ 
                header('location: ../views/addBook.php?message=sucess');  
            }   
            else  
            {  
                header('location: ../views/addBook.php?message=failed');
            }
        }
}

    else  
    {  
        header('location: ../views/login.php');
    }


?>