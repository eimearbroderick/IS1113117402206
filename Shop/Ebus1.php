<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
         <link rel="stylesheet" href="ebus.css" type="text/css"/>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door" rel="stylesheet" />
  
   <style>
       body {
           background-image: url("http://simplywallpaper.net/pictures/2010/04/09/abtract-psychedelic-4.jpg");
           font-family:"The Girl Next Door";
       }
   </style>
    </head>
    
    
        
        <div class="products">
                <form method="POST" action="Ebus2.php">
                
               <center><label for="salesforce">
                    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/> 
                Sales Force @ $100
                </label>
                
                <br>
                <br>
                
                <label for="cloud9">
                    <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/> 
                Cloud9 @ $300
                </label>
                
                 <br>
                 <br>
                 
                 <label for="amazon">
                    <input type="radio" id="amazon" name="product" onClick="disablebtnProceed()"/> 
                Amazon @ $200
                </label>
                
                 <br>
                 <br>
                 
                 <label for="gmail">
                    <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/> 
                Gmail @ $150
                </label>
                
                <br>
                <br>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
                </label>
                <br>
                <br>
                
                <label for="discount">
                    Discount @ 5%
                    <input type="text" id="discount" name="discount" value="0.00" readonly/>
                </label>
                
                <br>
                <br>
                
                <label for="vat">
                    Vat @ 10%
                    <input type="text" id="vat" name="vat" value="0.00" readonly/>
                </label>
                
                <br>
                <br>
                
                <label for="total">
                    Total
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                
                <br>
                <br>
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                  </form>
                
                <br>
        
              <button onclick="calcSub()">Calculate Cost</button>
              <a role="button" href="Ebus1.php">Clear Choice</a>
          </div>
       
        
    </body>
</html>
