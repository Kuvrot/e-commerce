  
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

  	<div class="container-fluid about" style="color:white;">
      <div class="container sub_about">
        <h3>SOBRE NOSOTROS</h3>
         <h4 style="text-align:center;">Misión</h4>
         <p style="text-align:left;">
          En Tecnodeliciosas Fresas, nuestra misión es proporcionar experiencias gastronómicas excepcionales a nuestros clientes, fusionando la frescura y el sabor de las fresas con la eficiencia y comodidad de las herramientas tecnológicas. Nos comprometemos a ofrecer productos de alta calidad, como fresas con crema, bolis y fresas con chocolate, utilizando procesos eficientes y sostenibles. Nos esforzamos por superar las expectativas de nuestros clientes, brindando un servicio excepcional y una experiencia de compra conveniente a través de nuestras plataformas electrónicas.
        </p>
        <br>
        <h4 style="text-align:center;">Visión</h4>
         <p style="text-align:left;">
          Nuestra visión en Tecnodeliciosas Fresas es ser líderes en el sector de negocios electrónicos, destacando por nuestra innovación, calidad y atención al cliente. Nos visualizamos como una empresa reconocida a nivel regional por nuestra capacidad para integrar de manera efectiva las tecnologías de información y comunicación en todos los aspectos de nuestro negocio, desde la producción hasta la entrega. Aspiramos a ser pioneros en la implementación de sistemas ERP y CRM para optimizar nuestras operaciones y mejorar la experiencia del cliente. Con un enfoque en la excelencia y la constante mejora, nos esforzamos por ser un referente en la industria, estableciendo nuevos estándares de calidad y servicio.
          </p>

         </div>
      
    </div>

    <!---footer part--->


    <?php include "parts/footer.php";?>
  
  </body>
  </html>



