<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
       
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>       
       
        <style>
              
                body { background-image: url("http://simplywallpaper.net/pictures/2010/04/09/abtract-psychedelic-4.jpg");
                      
                     
                      
                       text-align:center;
                       
                       
                }
            </style>
    </head>
        
    <body>
        
         <!--navbar-->
         <div class="header">
          <div class="logo">
            <img src ="https://dewey.tailorbrands.com/production/brand_version_mockup_image/643/577419643_b582ee60-95e9-4a34-bab2-66640c6833c7.png?cb=1519244670">
          </div>
            <ul>
              <li><a href="homepage.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Cloud Services</a></li>
              <li><a href="#">Interests</a></li>
            </ul>
        </div>
    
     <br/>
     <br/>
     <br/>
     <br/>
     <br/>
     <br/>
     <br/>
     <br/>
     <br/>
     <br/>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                  
                   <label for="user_name">NAME</label>
                   <input type="text" id="user_name" placeholder="Full Name">
                   <br/>
                   
                   <label for="email">EMAIL</label>
                   <input type="email" id="email" placeholder="Email Address">
                   <br/>
                   
                   <label for="card_number">CARD NUMBER</label>
                   <input type="number" id="card_number" placeholder="Card Number" maxlength="16" >
                   <br/>
            
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                    
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
           
            
            <?php
            // set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
       
     
        
        <script type="text/javascript" src="Ebus2_validator.js"></script>
    </body>
</html>