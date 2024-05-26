
  

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
	<title>Fresas</title>
	<!-- for-mobile-apps -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <meta name="keywords" content="online Vegetables and fruits,online Vegetables and fruits chennai,online Vegetables and fruits shopping,online Vegetables and fruits store,online supermarket,Vegetables and fruits chennai, buy Vegetables and fruits online,online Vegetables and fruits purchase,online vegetable store"/>
    <meta name="description" content="Buy fresh Vegetables and fruits at online store of odisha-India. Online Supermarket includes fresh vegetable,fruits,greens. online Vegetables and fruits Shopping now made easy. Order Vegetables and fruits online with door step delivery all over Chennai at the best price & quality with get free home delivery."/>

     
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

     <!-- bootystrap java script---->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

    <script src="https://kit.fontawesome.com/67f58695eb.js" crossorigin="anonymous"></script>

    <!----coustum styles sheet--->
      <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>

    <!--------------------navbar....================------------m_c_1_4_3-------------->

    <?php include "parts/header.php"?>

<!--end of nav---mc_-->

  	<div class="container-fluid">
      <div class="container vegetables">
        <h3>Fresas</h3>
        <hr>
        
      </div>
      
    </div>




    <!---===-------------vegetables------------>

     <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
            <img src="img/products/p1.jpg" width="100%" height="300px">
            <div class="caption">
              <p>Fresas con crema</p>
                </div>
                  <div class="price">
                     <span></span> <span></span> <i class="fa fa-usd">10</i>
                    <form method="post" action="manage.php">
                      <p><input type="submit" name="sub" value="Añadir carrito" class=" btn btn-dark  text-white">
                      <a href="https://www.paypal.com/ncp/payment/5SSP9GV67GDYY" class="btn btn-dark">Compra rápida</a></p>
                      <input type="hidden" name="image" value="img/products/p1.jpg">
                      <input type="hidden" name="Itemname" value="Fresas con crema">
                      <input type="hidden" name="price" value="10">
                    <input type="hidden" name="quantity" value="1">
                  </form>
                </div>
              </div>     
            </div>

            <div class="col-md-3">
         <div class="thumbnail">
            <img src="img/products/p1.jpg" width="100%" height="300px">
            <div class="caption">
              <p>Fresas enchocolatadas</p>
                </div>
                  <div class="price">
                     <span></span> <span></span> <i class="fa fa-usd">10</i>
                    <form method="post" action="manage.php">
                      <p><input type="submit" name="sub" value="Añadir carrito" class=" btn btn-dark  text-white">
                      <a href="https://www.paypal.com/ncp/payment/5SSP9GV67GDYY" class="btn btn-dark">Compra rápida</a></p>
                      <input type="hidden" name="image" value="img/products/p1.jpg">
                      <input type="hidden" name="Itemname" value="Fresas enchocolatadas">
                      <input type="hidden" name="price" value="10">
                    <input type="hidden" name="quantity" value="1">
                  </form>
                </div>
              </div>     
            </div>

            <div class="col-md-3">
         <div class="thumbnail">
            <img src="img/products/p1.jpg" width="100%" height="300px">
            <div class="caption">
              <p>Bolis de fresas</p>
                </div>
                  <div class="price">
                     <span></span> <span></span> <i class="fa fa-usd">10</i>
                    <form method="post" action="manage.php">
                      <p><input type="submit" name="sub" value="Añadir carrito" class=" btn btn-dark  text-white">
                      <a href="https://www.paypal.com/ncp/payment/5SSP9GV67GDYY" class="btn btn-dark">Compra rápida</a></p>
                      <input type="hidden" name="image" value="img/products/p1.jpg">
                      <input type="hidden" name="Itemname" value="Bolis de fresas">
                      <input type="hidden" name="price" value="10">
                    <input type="hidden" name="quantity" value="1">
                  </form>
                </div>
              </div>     
            </div>
      </div>



      
<?php include "parts/footer.php";?>

    
  
  </body>
  </html>



