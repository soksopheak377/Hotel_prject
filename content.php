<div id="contant">

<!--========================conten-left===================-->
		

		 <?php
		 	 switch ($page) {
		 	 	case '':
		 	 		include_once 'home.php';
		 	 		break;
		 	 	case 'Home':
		 	 		include_once 'home.php';
		 	 		break;
		 	 	case 'Room':
		 	 		include_once 'room.php';
		 	 		break;
		 	 	
		 	 	case 'Booking':
		 	 		include_once 'booking.php';
		 	 		break;

		 	 	case 'Contact':
		 	 		include_once 'contact.php';
		 	 		break;
		 	 	default:
		 	 		# code...
		 	 		break;
		 	 }

		 	 ?>
</div>