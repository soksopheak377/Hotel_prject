<?php 
	session_start();
	
	include_once"connection/connection.php";
	if (isset($_GET['page'])) {
		$page=$_GET['page'];

			}
?>


<!DOCTYPE html>
<html>

 <?php
 	include_once'include/head.php';
 ?>
<body>
	<div id="container">
<?php
	//====================header============-->

		 include_once'include/header.php';

	//====================menu============-->

		 include_once'include/menu.php';

	//====================slide============-->

		 include_once'include/slide.php';


	//====================slide============-->

		 include_once'include/booking.php';

	//''==================== echo page content============-->
		 $page=isset($_GET['page'])?$_GET['page']:'Home';
		 $path='pages/';
		 switch ($page) {
		 	case 'Home':
		 		include_once($path.$page.'.php');
		 		break;
		 	case 'Room':
		 	 		include_once($path.$page.'.php');
		 	 	break;
		 	 	
		 	 // case 'Booking':
		 	 // 		include_once($path.$page.'.php');
		 	 // 	break;

		 	 case 'Contact':
		 	 		include_once($path.$page.'.php');
		 	 	break;
		 	 	
		 	default:
		 		# code...
		 		break;
		 }


	//====================footer============-->

		include_once'include/footer.php';
	?>
</div>
</body>
</html>