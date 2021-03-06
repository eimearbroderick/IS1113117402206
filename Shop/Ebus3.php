<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
         <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
         <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door" rel="stylesheet" />
        
        <style>
            body {
                   font-family: "The Girl Next Door";
                   background-color: #E1F2FE;
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
        
     <div class="receipt">
        <h2 class="title" id="ebus3heading">Receipt</h2>
        
        <div class="ebus3style">
            
             <?php
            // set session variables
            $_SESSION["user"] = $_POST["user"];
            $_SESSION["userEmail"] = $_POST["userEmail"];
            ?>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name: " . $_SESSION["user"] . ".";
        ?>
        
        <br/>
        <br/>
        
        <?php
        echo "Customer Email: " . $_SESSION["userEmail"] . ".";
        ?>
    
        <br/>
        <br/>
        
        <?php
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
            
        </div>
       
        <h3 class="ebus3text">
        Thank you for shopping with CloudPal.</h3>
        
        
     </div>
     
     <div class="cloudpal2">
      <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/79/592678079_eb6afdfc-8eb4-4ab6-933c-22b23b577846.png?cb=1519674283">
     </div>   
     
     <a href="../homepage/homepage.html" class ="btn-home">Home</a>
    </body>
</html>