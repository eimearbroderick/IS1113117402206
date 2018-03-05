<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <!--Styling-->
             
          <link rel="stylesheet" href="ebus.css" type="text/css"/>
             
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
              <li><a href="../homepage/homepage.html">Home</a></li>
              <li><a href="../Shop/aboutUs.html">About</a></li>
              <li><a href="../Shop/shopHome.html">Shop</a></li>
              <li><a href="../Shop/aboutcloud.html">Cloud Services</a></li>
              <li><a href="../interests/sports.html">Interests</a></li>
              <li><a href="../CV/cvHome.html">CV</a></li>
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
       
        <h4>RECIEPT</h4>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        
    </body>
</html>