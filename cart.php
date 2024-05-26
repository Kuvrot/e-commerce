
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
  <title>CART page</title>
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
      <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <!--------------------navbar....================------------m_c_1_4_3-------------->

    <?php include "parts/header.php"?>

<!--end of nav---mc_-->


<div class="container" >
   <div class="row">
      <div  class="col-md-12 text-center border rounded text-white my-5" style="background-color: rgb(242, 156, 170);">
        <h3>Mi carrito</h3>
      </div>
      

  <div class="row" style="overflow-x: auto;">

    <div class="col-md-10">
       <table class="table" >
  <thead class="text-center">
    <tr>
      <th scope="col">Picture</th>
      <th scope="col">Itemname</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody class="text-center">

    <?php
  
 // print_r($_SESSION['cart']);

    $total=0;
     
     if (isset($_SESSION['cart']))
      {
       foreach ($_SESSION['cart'] as $key => $value)
        {
           $total=$total+$value['price'];
    echo "
      <tr>
       <td><img src='$value[image]' width='100px' height='100px'></td>
       <td>$value[Itemname]</td>
       <td>$value[price]</td>
       <td>$value[quantity]</td>
        <td>
        <form method='post' action='manage.php'>
        <button class='btn tbn-sm btn-outline-danger' name='remove'>remove</button>
        <input type='hidden' name='Itemname' value='$value[Itemname]' >
        </form>
        </td>
      </tr>
 
    ";
  }
     }

    ?>
  </tbody>
</table>
      
    </div>
</div>



<div class="col-md-2 bg-light text-success border rounded mb-5 mt-4" style="margin-left:10%; padding:2.5%;">
  <h3>Total - $<?php echo $total; ?></h3>
  
  <form action="order.php" method="post">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="method" id="cod" value="cod" checked>
      <label class="form-check-label" for="cod">Pago en tienda</label>
    </div>
    
    <div class="form-check">
      <input class="form-check-input" type="radio" name="method" id="paypal" value="paypal">
      <label class="form-check-label" for="paypal">Paypal</label>
    </div>
    
    <button type="submit" class="btn btn-dark text-white btn-rounded mt-4">Order Now</button>
  </form>
</div>





 
   

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

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

