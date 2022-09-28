"user strict"
function validateBookId(bookId) {
    if(bookId.length <=0){
        document.getElementById("bookIdError").innerHTML = "Book Id can't be empty!";
        document.getElementById("bookId").style.borderColor = "red";
    }
    else{
        document.getElementById("bookIdError").innerHTML = "";
    }
}
function validateMemberId(memberId) {
    if(memberId.length <=0){
        document.getElementById("memberIdError").innerHTML = "Member Id can't be empty!";
        document.getElementById("memberId").style.borderColor = "red";
    }
    else{
        document.getElementById("memberIdError").innerHTML = "";
    }
}
function validateReturnDate(returnDate) {
    if(returnDate.length <=0){
        document.getElementById("returnDateError").innerHTML = "Expected Return Date can't be empty!";
        document.getElementById("returnDate").style.borderColor = "red";
    }
    else{
        document.getElementById("returnDateError").innerHTML = "";
    }
}