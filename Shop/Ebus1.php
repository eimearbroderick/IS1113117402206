<!DOCTYPE html>
<html>
    <head>
        <title>Choose Product</title>
            <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door" rel="stylesheet" />
        
        <style>
            body { background-color: #E1F2FE;
            }
        </style>
    </head>
    
    <body>
       
       <!--Navbar-->
       <div class="header">
          <div class="logo">
            <img src ="https://dewey.tailorbrands.com/production/brand_version_mockup_image/643/577419643_b582ee60-95e9-4a34-bab2-66640c6833c7.png?cb=1519244670">
          </div>
            <ul>
              <li><a href="../homepage/homepage.html">Home</a></li>
              <li><a href="../Shop/aboutUs.html">About</a></li>
              <li><a href="../Shop/shopHome.html">Shop</a></li>
              <li><a href="../Shop/aboutcloud.html">Cloud Services</a></li>
              <li><a href="../interests/sports.html">Interests</a></li>
              <li><a href="../CV/cv_page1.html">CV</a></li>
            </ul>
        </div>
        
        <div class="cloudpal3">
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/79/592678079_eb6afdfc-8eb4-4ab6-933c-22b23b577846.png?cb=1519674283">
        </div>
        
        <h2 class="title" id="ebus1heading">Select A Product</h2>
        
             <div class="radiobuttons" id="radiobuttons">
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              
              <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <div/>
              
              <br>
              
              <br>
              <br>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="vat">
                Vat @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
              
              <br>
              
              
              
              <label for="total">
                Total
                <input type="text" id="total"  name="total" value="0.00" readonly/>
              </label>
    
              <br>
              
             <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
              
            </form>
            
            <br>
            <a role="button" onClick="calculateSub()" id="btnCalculate" >Calculate Cost</a>
            <a role="button" class="btnClear" id="btnClear" href="Ebus1.php">Clear Choice</a>

          
            
            
           
        
    </body>
</html>