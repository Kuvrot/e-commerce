<!-- 

<div class="container-fluid head">
  			<div class="row">
  				<div class="col-md-8">

  					<div class="icon">
  					<a href="">	<i class="fa fa-facebook-official" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-instagram" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-twitter" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
  					</div>
  					
  				</div>
  				
  				<div class="col-md-4 ">
  					<div class="icon2">
  					<i class="fa fa-mobile" aria-hidden="true"></i><p>+91 6370126361</p>
  				</div>
  				</div>
  			</div>
  		
  	</div>

-->

<div class="container" style="">
  		<div class="row">

  			<div class="col-md-4">
  			 <div class="brand">
  			 	 <a href="index.php"><img src="img/logo.png" alt="" width="128"></a>
  			 </div>	
  			</div>
  			<div class="col-md-4">
  				<div class="form">
  			</div>
  			</div>
  			<div class="col-md-4">
  				<div class="icon3">
  					<a href="https://goo.gl/maps/ZQUnuedvt6E5mjjv5"> <i class="fa fa-map-marker" aria-hidden="true">Location</i></a>
  					 <a  href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">Carrito(<?php echo $count; ?>)</i></a>
  				</div>
               
  			</div>


  		</div>
  		
  	</div>

      <nav class="navbar navbar-expand navbar-custom" style="background-color: rgb(242, 156, 170)">
  <a class="navbar-brand" href="index.php">Tecnodeliciosas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>

  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav " style="padding-right:5%">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vegetables.php">Fresas</a>
      </li>
       <!--<li class="nav-item">
        <a class="nav-link" href="Fruitd.php">Fruits</a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="about.php">Nosotros</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contacto</a>
      </li>
      <li class="nav-item dropdown">
      <?php if (!isset($_SESSION["user"])) {?>  
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuario
        </a>
        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Ingresar</a>
          <a class="dropdown-item" href="Logup.php">Registrarse</a>
        </div>
          <?php }else{ ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["user"]; ?>
        </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">Log out</a>
        </a>
        </div>
            <?php }?>
           
      </li>
     
    </ul>
    
  </div>
</nav>