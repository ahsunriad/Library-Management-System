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
function validateExpectedReturnDate(expectedReturnDate) {
    if(expectedReturnDate.length <=0){
        document.getElementById("expectedReturnDateError").innerHTML = "Expected Return Date can't be empty!";
        document.getElementById("expectedReturnDate").style.borderColor = "red";
    }
    else{
        document.getElementById("expectedReturnDateError").innerHTML = "";
    }
}
function validateReturnedOn(returnedOn) {
    if(returnedOn.length <=0){
        document.getElementById("returnedOnError").innerHTML = "Returned on Date can't be empty!";
        document.getElementById("returnedOn").style.borderColor = "red";
    }
    else{
        document.getElementById("returnedOnError").innerHTML = "";
    }
}
function validateFine(fine) {
    if(fine == ""){
        document.getElementById("fineError").innerHTML = "Fine can't be empty!";
        document.getElementById("fine").style.borderColor = "red";
    }
    else{
        document.getElementById("fineError").innerHTML = "";
    }
}