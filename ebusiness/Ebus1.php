<!DOCTYPE html>
<html>
    <head>
        <title> Select Product</title>
    <!--Query-->
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type= "text/javascript" src="cost_calc.js"> </script>
    <style>
        body { background-image: url("http://simplywallpaper.net/pictures/2010/04/09/abtract-psychedelic-4.jpg");
        {
    </style>
    </head>
        <body>
        
        <h4> Select a Product </h4>
       
        </br>
        
        <form method= "PDSI" action= "Ebus2.php">
        
        <label for "salesforce">
        <input type= "radio" id = "salesforce" name = "product" checked onClick = "disabledbtnProceed()"/>
        Salesforce @ $100
        </label>
        
        </br>
        
        <label for "aws">
        <input type= "radio" id = "aws" name = "product"  onClick = "disabledbtnProceed()"/>
        AWS @ $300
        </label>
        
    </br>
  
    </br>
    
     
        <label for "subtotal">
        Subtotal
        <Input type= "text" id = "subtotal" value = "0.00" readonly/>
        </label>
        
     </br>
     
     
        <label for "total">
       Total
        <Input type= "text" id = "total" value = "0.00" readonly/>
        </label>
        
        </br>
        
        <button type= "submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        </br>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href= "Ebus1.php">Clear Choice</a>
        
        
        </br>
        <a href="homepage.html"class="btn btn-dark">Home </a>
        </body>

</html>