
  

 <?php

session_start();
        
         $count=0;
       if (isset($_SESSION['cart']))
        {
         $count=count($_SESSION['cart']);
     
         # code...
       }
?>
 <!------------------made with love......-->

 <!DOCTYPE html>
 <html>
 <head>

   <html lang="en">
 <link rel="icon" href="img\th (1).jfif" height="20%"/>
 <title>Tecnoldeliciosas</title>
 <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="online Vegetables and fruits,online Vegetables and fruits chennai,online Vegetables and fruits shopping,online Vegetables and fruits store,online supermarket,Vegetables and fruits chennai, buy Vegetables and fruits online,online Vegetables and fruits purchase,online vegetable store"/>
   <meta name="description" content="Buy fresh Vegetables and fruits at online store of odisha-India. Online Supermarket includes fresh vegetable,fruits,greens."/>

    
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- bootystrap java script---->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

   <script src="https://kit.fontawesome.com/67f58695eb.js" crossorigin="anonymous"></script>

   <!----coustum styles sheet--->
     <link rel="stylesheet" href="css/styles.css" >
 </head>
 <body>
   <!--------------------navbar....================------------m_c_1_4_3-------------->

 <?php include "parts/header.php"?>

<!--end of nav---mc_-->




<div >
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
 </ol>
 <div class="carousel-inner" style="height:50%">
   <div class="carousel-item active" >
     <img class="d-block w-100" src="img/about/mision.jpg" alt="First slide">
   </div>
   <div class="carousel-item">
     <img class="d-block w-100" src="img/about/vision.jpg" alt="Second slide">
   </div>
   <div class="carousel-item">
     <img class="d-block w-100" src="img/about/Valores.jpg" alt="Third slide">
   </div>
   <div class="carousel-item">
     <img class="d-block w-100" src="img/about/OrganigramaPrincipal.png" alt="Third slide">
   </div>
   <div class="carousel-item">
     <img class="d-block w-100" src="img/about/arturo.png" alt="Third slide">
   </div>
   <div class="carousel-item">
     <img class="d-block w-100" src="img/about/meli.png" alt="Third slide">
   </div>
   <div class="carousel-item">
     <img class="d-block w-100" src="img/about/yum.png" alt="Third slide">
   </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
</div>


</div>


   <?php include "parts/footer.php";?>
     <script>
    


   //pageup.....

   var mybutton = document.getElementById('top');
  
   window.onscroll = function() 
   {scrollFunction()};

function scrollFunction()
{
 if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
   mybutton.style.display = "block";
 } else {
   mybutton.style.display = "none";
 }
}

// When the user clicks on the button, scroll to the top of the document
function pageup()
{
 document.body.scrollTop = 0;
 document.documentElement.scrollTop = 0;
}
   </script>
 </body>
 </html>

