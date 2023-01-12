<?php 
if(!isset($_SESSION))
{
    session_start();
}
    if(!isset($_SESSION['start'])){
        header('location: login.php');}
?>
    <ul style="list-style-type: none">
        <li><a style="color: white;" href="dashboard.php"><b>Dashboard</b></a></li>
        <li><a style="color: white;" href="profile.php"><b>My Profile</b></a></li>
        <li><a style="color: white;" href="members.php"><b>Members</b></a></li>
        <li><a style="color: white;" href="addBook.php"><b>Add Book</b></a></li>
        <li><a style="color: white;" href="searchBook.php"><b>Search Book</b></a></li>
        <li><a style="color: white;" href="orderBook.php"><b>Order Book</b></a></li>
        <li><a style="color: white;" href="issuedBooks.php"><b>Issued Books</b></a></li>
        <li><a style="color: white;" href="returnedBooks.php"><b>Returned Books</b></a></li>
        <li><a style="color: white;" href="Notices.php"><b>Notices</b></a></li>
        <li><a style="color: white;" href="sendNotice.php"><b>Send Notice</b></a></li>
        <li><a style="color: white;" href="requests.php"><b>Requests</b></a></li>
        <!-- <li> <a href="logout.php">Logout</a></li> -->
    </ul>
