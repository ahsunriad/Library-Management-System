"user strict"
/* function validateBookId(){
    var bookId = document.getElementById("bookId").value;
    if(bookId.length < 1){
        document.getElementById("idError").innerHTML = "Book Id can't be empty!";
        document.getElementById("bookId").style.borderColor = "red";
        return false;
        
    }
    else{
        document.getElementById("idError").innerHTML = ""; 
    }
} */
function validateBookName(){
    var bookName = document.getElementById("bookName").value;
    if(bookName.length < 1){
        document.getElementById("bookNameError").innerHTML = "Book Name can't be empty!";
        document.getElementById("bookName").style.borderColor = "red";
        return false;
        
    }
    else{
        document.getElementById("bookNameError").innerHTML = ""; 
    }
}
function validateCatagory(){
    var catagory = document.getElementById("catagory").value;
    if(catagory.length < 1){
        document.getElementById("catagoryError").innerHTML = "Catagory can't be empty!";
        document.getElementById("catagory").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("catagoryError").innerHTML = ""; 
    }
}
function validateAuthorName(){
    var authorName = document.getElementById("authorName").value;
    if(authorName.length < 1){
        document.getElementById("authorNameError").innerHTML = "Email can't be empty!";
        document.getElementById("authorName").style.borderColor = "red";
        return false;
        
    }
    else{
        document.getElementById("authorNameError").innerHTML = ""; 
    }
}
function validatePublisherName(){
    var publisherName = document.getElementById("publisherName").value;
    if(publisherName.length < 1){
        document.getElementById("publisherNameError").innerHTML = "Publisher Name can't be empty!";
        document.getElementById("publisherName").style.borderColor = "red";
        return false;
        
    }
    else{
        document.getElementById("publisherNameError").innerHTML = ""; 
    }
}
function validateEdition(){
    var edition = document.getElementById("edition").value;
    if(edition.length < 1){
        document.getElementById("editionError").innerHTML = "Edition can't be empty!";
        document.getElementById("edition").style.borderColor = "red";
        return false;
        
    }
    else if(isNaN(edition)){
        document.getElementById("editionError").innerHTML = "Edition should be a number";
        return false; 
    }
    else{
        document.getElementById("editionError").innerHTML = "";
    }
}
function validateISBN(){
    var isbn = document.getElementById("isbn").value;
    if(isbn.length < 1){
        document.getElementById("isbnError").innerHTML = "ISBN can't be empty!";
        document.getElementById("isbn").style.borderColor = "red";
        return false;
        
    }
    else{
        document.getElementById("isbnError").innerHTML = ""; 
    }
}
function validateNoOfCopies(){
    var noOfCopies = document.getElementById("noOfCopies").value;
    if(noOfCopies.length < 1){
        document.getElementById("noOfCopiesError").innerHTML = "Book No. of Copies can't be empty!";
        document.getElementById("noOfCopies").style.borderColor = "red";
        return false;
        
    }
    else{
        document.getElementById("noOfCopiesError").innerHTML = ""; 
    }
}

