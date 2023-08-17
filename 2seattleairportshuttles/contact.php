<!DOCTYPE html>
<html lang="en">
 <head>
  <title>One Way & Round Trip Cruise Transfers To Seattle Airport shuttles wwww</title>
  
  <meta name="viewport" content="width=device-width" >
  <meta charset="utf-8" >
  <link rel="stylesheet" href="css/portal.css" >
  <link rel="stylesheet" href="css/nav.css" >
  <link rel="stylesheet" href="css/forms.css" >

 </head>

 <body>
     <header>
     <h1 > **SCHEDULE SHARED RIDE SERVICE** <br> AND PRIVATE NON STOP SERVICE <br> AND FREE LUGGAGE STORAGE - ASK FOR DETAILS </h1>
     <nav class="topnav" id="myTopnav">
     <a href="index.html" class="active">Welcome</a>
       <a href="rates.html">Rates</a>
       <a href="vehicles.html">Vehicles</a>
       <a href="about.html">About</a>
       <a href="contact.php">Contact</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     
     </header>
     
   <div class="wrapper">
     
     <img class="desktop" src="images/shuttle.jpg" alt="Photo of William doing a photo op at Safeco Field." >
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of men in black suit/ representing me a professional." >
       
     <img class="phone" src="images/phone.jpg" alt="Photo of a Puma which is my aka name/ go get it." >
       
       <h2 class="subheader">SEATTLE CRUISE PORT EXPRESS TRANSFERS TO PIER 66 & 91</h2>
       
       <p>SCHEDULE SHARED RIDE SERVICE AND PRIVATE NON STOP SERVICE BETWEEN SEATTLE AIRPORT AND SEATTLE CRUISE SHIP PORT - Our goal is to give you the best experience possible while traveling throughout the great northwest while relaxing in our luxury vehicles driven by experience drivers  bonded and insured to reasure your comfort during your stay in the Puget sound.  Our payment options are: VISA / AMERICAN EXPRESS / CASHAPP / VENMO / SQUARE and many more. BOOK HERE BELOW OR email us william@2seattleairportshuttles.com + 202-796-1499 with booking dates for the Greater Seattle area. 0000000000 </p>

       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "william@2seattleairportshuttles.com";  //place your/your client's email address here
        $toName = "William Anderson"; //place your client's name here
        $website = "Elgante Transportation & luggage Service";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2022 by 
          <a href="contact.php">William Anderson</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>