<?php 
	session_start();
	
	include_once"../connection/connection.php";
	if (isset($_GET['page'])) {
		$page=$_GET['page'];

			}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="shortcut icon" href="../images/icon.png">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<!--=================script===================-->
	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/slide.js"></script>

	<script src="../tinymce/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>



</head>
<body>
	<div id="content">
		<div id="header">
		<!--===================btn-room insert=================*-->
			<ul>

			<li><a href="adminpage.php?page=Roomview"name="btnRoom"  class="form-control"> Room</a></li>


		<!--===================btn-home insert=================*-->
			

			<li><a href="adminpage.php?page=Homeview" name="btnHome" class="form-control">Home</a></li>

			

		<!--===================btn-contact insert=================*-->
			

			<li><a href="adminpage.php?page=contact" name="btnContact" class="form-control"> Contact</a></li>

		<!--==========================log out===========================-->
			

			<li><a href="adminpage.php?page=logout" name="btnContact" class="form-control"> Log Out</a></li>

			</ul>
		</div>
			

		<!--===================btn-contact insert=================*-->
			 <div id="contantinsert">

			 	

			 	<!--=================================room===============================-->

			 	<?php

			 	#'==================== echo page content============-->
				 $page=isset($_GET['page'])?$_GET['page']:'Roomview';
				 $path='admin_edit/';
				 switch ($page) {
				 	case 'Roomview':
				 		include_once($path.$page.'.php');
				 		break;
				 	case 'Homeview':
				 	 		include_once($path.$page.'.php');
				 	 	break;
				 	 	
				 	 case 'contact':
				 	 		include_once($path.$page.'.php');
				 	 	break;
				 	 	
				 	 // case 'logout':
				 	 // 		include_once($path1.$page.'.php');
				 	 // 	break;
				 	 	
				 	default:
				 		# code...
				 		break;
				 }

					 	?>
			 </div>

	</div>
</body>
</html>