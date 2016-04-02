<div id="contant">

<!--========================conten-left===================-->
		

		 <?php
		 
		 	 switch ($page) {
		 	 	case '':
		 	 		include_once 'content.php';
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