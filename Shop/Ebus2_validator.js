/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
    var name;
    
    name = document.getElementbyId("user_pin").value;
    
    if (name == "") {
        alert("Please enter your Full Name")
    }
    else {
        enablebtnPurchase();
    }
    
    var email;
    
    email = document.getElementById("email")
    
    if (email == "") {
        alert("Please enter a valid E-mail Address")
    }
    else {
        enablebtnPurchase();
    }
    
    var card_number;
    
    name= document.getElementById("card_number")
    
    if (card_number == "") {
        alert("Please enter a valid 16 digit Card Number")
    }
    else {
        enablebtnPurchase();
    }
}

   

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}
