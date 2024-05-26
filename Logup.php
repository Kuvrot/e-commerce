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
	<title>Index page</title>
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
   
     <div class="container">
      <div class="row Logup">
        <div class="col-md-12">

       


        <div class="Signup">
           <h2>Registrarse</h2>
              <hr>
          <form method="post" name="Signup" action="Logup.php">
            <label for="name">Nombre completo</label>
            <br>
            <input type="text" name="name" placeholder="Tu nombre..."  id="name">
            <br>
            <label for="phone">Phone Number:</label>
            <br>
            <input type="text" name="phone" placeholder="Número de teléfono"  id="name">
            <br>
            <label for="email">Contacto</label>
             <br>
            <input type="text" name="email" placeholder="Tu email..."  id="email">
            <br>
            <label for="pass">Enter Password:</label>
             <br>
            <input type="password" name="pass" placeholder="Contraseña..."   id="pass">
            <br>
            <label for="re-pass">Vuelve a introducir tu contraseña...</label>
             <br>
           <input type="password" name="re_pass" placeholder=" Vuelve a introducir tu contraseña..."  id="re-pass">
            <br><br>
            <input type="submit" name="submit" value="Crear cuenta" class="btn bg-dark" >
            <br>
          </form>
          <br>
        </div>
      
          
        </div>
        
      </div>
       
     </div>

    <!---footer part--->



    <?php include "parts/footer.php";?>
   <script type="text/javascript" src="js/javascript.js"></script>
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

  </body>
  </html>

<?php

if (isset($_POST['submit']))
 {
  
  include('db.php');

  $name=$_POST['name'];
    $phone=$_POST['phone'];
      $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="INSERT INTO `userr`(`name`, `email`, `pass`) VALUES ('$name','$email','$pass')";
      if (mysqli_query($conn,$sql))
       {
          echo "<script>alert('Logup Sucessfully..');window.open('login.php','_self');</script>";   
      }
      else
      {
         echo "<script>alert('Some thing wrong Try Again');</script>"; 
      }
}
//mysqli_close($conn);
?>




