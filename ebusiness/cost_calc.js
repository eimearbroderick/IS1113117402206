/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce'))
    argSubTotal = 100;
}
else {
    argSubTotal = 300;
}
display (argSubTotal);
}
fuction display(parm1){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disabledbtnProceed() {
    $('#btnProceed').prop('disabled', true);
    
}