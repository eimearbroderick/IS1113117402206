<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door" rel="stylesheet" />
        
        <style>
            body { background-image: url("http://simplywallpaper.net/pictures/2010/04/09/abtract-psychedelic-4.jpg");
                   font-family: "The Girl Next Door";
            }
        </style>
    </head>
    <body>
    
    "<div class="header">
          <div class="logo">
            <img src ="https://dewey.tailorbrands.com/production/brand_version_mockup_image/643/577419643_b582ee60-95e9-4a34-bab2-66640c6833c7.png?cb=1519244670">
          </div>
            <ul>
              <li><a href="../homepage/homepage.html">Home</a></li>
              <li><a href="../Shop/aboutUs.html">About</a></li>
              <li><a href="../Shop/shopHome.html">Shop</a></li>
              <li><a href="../Shop/aboutcloud.html">Cloud Services</a></li>
              <li><a href="../interests/sports.html">Interests</a></li>
              <li><a href="../CV/cvHome.html">CV</a></li>
            </ul>
        </div>
        
        <h2 class="title" id="ebus2heading">Enter Details</h2>
        
        
        <form action="Ebus3.php" method="POST" class="ebus2">
            
            <div class="container" id="ebus2boxes">
                
            <label for="user">Name: </label>
            <input type="name" id="user" name="user" placeholder="Name" maxlength="30"/>
            
            <br/>
            <br/>
            
            <label for="userEmail">Email Address: </label>
            <input type="email" id="userEmail" name="userEmail" placeholder="example@email.com" maxlength="40">
            
            <br/>
            <br/>
            
             <label for="userPin">PIN: </label>
             <input type="password" id="userPin" placeholder="(4 Numbers Only)" maxlength="4">
             
             </div>

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            
            </form>
            
            <br/>
            <a role="button" onClick="validateDetails()" id="btnValidate">Validate</a>
            
          
            
            <?php
            $_SESSION["total"] = $_POST["total"];
            ?>
       
        
        <script type="text/javascript" src="Ebus2_validator.js"></script></div>
           
    </body>
</html>