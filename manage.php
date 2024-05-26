

<?php

session_start();
//session_destroy();

if ($_SERVER['REQUEST_METHOD']=="POST")
 {
	if (isset($_POST['sub']))
	 {

		if (isset($_SESSION['cart']))
		 {
		 	 $item=array_column($_SESSION['cart'], 'Itemname');

		 	 if (in_array($_POST['Itemname'], $item))
		 	  {
		 	    
		 	   // echo '<script>alert("The Item allredy added...); window.open("index.php","_blabk");</script>';
		 	  	echo "<script>alert('The Item is already added...'); window.open('index.php','_self');</script>";
		 	 }
			
			$count=count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('image'=>$_POST['image'],'Itemname'=>$_POST['Itemname'],'price'=>$_POST['price'],'quantity'=>$_POST['quantity']);

			//sprint_r($_SESSION['cart']);
		}

		else
		{
			$_SESSION['cart'][0]=array('image'=>$_POST['image'],'Itemname'=>$_POST['Itemname'],'price'=>$_POST['price'],'quantity'=>$_POST['quantity']);
			//print_r($_SESSION['cart']);

			//echo '<script>alert("The Item  added.. Sucessfully..."); window.open("index.php","_blank");</script>';
			echo "<script>alert('The Item was added.. Sucessfully...');</script>";

		}
	}


	if (isset($_POST['remove']))
	 {
		foreach ($_SESSION['cart'] as $key => $value)
		 {
		  if ($value['Itemname']==$_POST['Itemname'])
		   {
		  	
		  	unset($_SESSION['cart'][$key]);
		  	$_SESSION['cart']=array_values($_SESSION['cart']);

		  	echo "<script>alert('item remove Sucessfully..');</script>";
		  }
		}
	}
}





?>
<script>
	window.location.href = "cart.php";
</script>