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

     <?php include "parts/header.php"?>

<!--end of nav---mc_-->
        
        <div class="container">
          <div class="row">
            <div class="col-md-12 shadow">

              <div class="Signup">
           <h2>Ingresar</h2>
          
          <form method="post" name="Signin"  onsubmit="return(validate_in());" >
            <label for="name">User Name:</label>
            <br>
            <input type="text" name="name"  id="name" placeholder="Enter your user name">
            <br>
            <label for="pass">Enter Password:</label>
            <input type="Password" name="pass"  placeholder="Enter your password"  id="pass">
            
            <br><br>
            <input type="submit" name="sub" value="Ingresar" class="btn bg-dark">
            <a href="user/homepage.php" style="color:white; text-decoration:none; margin-left:2.5%;">¿Olvidaste tu contraseña?</a>
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
  </body>
  </html>


<?php

if (isset($_POST['sub']))
 {
  
  include('db.php');

  $name=$_POST['name'];
  
        $pass=$_POST['pass'];
        
        $sql="SELECT * FROM `userr` WHERE name='$name' and pass='$pass'";
        $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res)>0)
       {
       
       echo "<script>alert('Login Sucessfully..'); window.open('cart.php','_self');</script>";
        $_SESSION["user"] = $name;
      }
      else
      {
         echo "<script>alert('Enter valid User name & Password..');</script>";
      }


}
  
?>

