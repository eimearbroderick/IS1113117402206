/* global $ */
function calcSub() {
    
var argSubTotal;
    
  
if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
   
    
} else if (document.getElementById('cloud9').checked) {
    argSubTotal = 200;
   
} else if (document.getElementById('amazon').checked) {
    argSubTotal = 300;
   
} else  {
     argSubTotal = 400;
     
}

    calcDisVatTotal(argSubTotal);

}

function calcDisVatTotal(parmSubTotal){
    var subtotal = parmSubTotal;
    var argVat;
    var argtotal;
    var argDiscount;
 


 
argDiscount = (parmSubTotal * 0.05);
argVat = ((parmSubTotal - argDiscount) * 0.1);
argtotal = ((parmSubTotal- argDiscount) + argVat) ;


   
display(parmSubTotal, argDiscount, argVat, argtotal);

}
    
    function display(parm1, parm2, parm3, parm4){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
     document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
       
       enablebtnProceed();
       
}

    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
          $('#btnProceed').prop('disabled', true);
 }