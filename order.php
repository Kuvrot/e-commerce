




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

   <div class="container">
   	<div class="col-md-8" style="margin: auto;">
   		   <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Order Details</h4>
       
      </div>
      <div class="modal-body mx-3 text-success">
     <form method="post">
  <div class="form-row ">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Teléfono</label>
      <input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección 2</label>
    <input type="text" name="addr1" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Dirección 1 (opcional)</label>
    <input type="text" name="addr2" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <input type="text" name="state" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Codigo postal</label>
      <input type="text" name="pin" class="form-control" id="inputZip">
    </div>
  </div>
 
  <input  type="submit" name="sub" class="btn btn-primary bg-success text-white" value="Continuar">
</form>
      </div>
   	</div>
   	
   </div>
 
    <!---footer part--->

    

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php include "parts/footer.php"; ?>
   
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

<?php

if (isset($_POST['sub']))
 {
  
include('db.php');

// Fetching and sanitizing input
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$addr1 = mysqli_real_escape_string($conn, $_POST['addr1']);
$addr2 = mysqli_real_escape_string($conn, $_POST['addr2']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$pin = mysqli_real_escape_string($conn, $_POST['pin']);

// Using prepared statements to prevent SQL injection
$sql = "INSERT INTO user_de (name, phone, addr1, addr2, city, state, zip) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'sssssss', $name, $phone, $addr1, $addr2, $city, $state, $pin);
    if (mysqli_stmt_execute($stmt)) {
        // Get the last inserted ID
        $order_id = mysqli_insert_id($conn);
        
        $sql = "INSERT INTO user_order (id, itename, price, qunt, imgpath) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            foreach ($_SESSION['cart'] as $key => $value) {
                $order_name = $value['Itemname'];
                $order_price = $value['price'];
                $order_quantity = $value['quantity'];
                $path = $value['image'];
                
                mysqli_stmt_bind_param($stmt, 'isdis', $order_id, $order_name, $order_price, $order_quantity, $path);
                mysqli_stmt_execute($stmt);
            }
            unset($_SESSION['cart']);
            echo "<script>alert('Order placed successfully.'); window.open('index.php', '_self');</script>";
        } else {
            echo "<script>alert('Failed to prepare statement for order items.');</script>";
        }
    } else {
        echo "<script>alert('Failed to insert user details.');</script>";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('Failed to prepare statement for user details.');</script>";
}

mysqli_close($conn);

}

//mysqli_close($conn);
?>
