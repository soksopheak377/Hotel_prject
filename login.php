<?php
session_start();
 if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']){header("loaction: admin/adminpage.php");}

 	//----------- include connection------------------------
include_once('connection/connection.php');
 
 $username='';
 $password='';
$error = array('username' =>'' ,'password'=>'','Invalid'=>'' );
$sublog=isset($_POST['sublog'])?1:0;
 	if ($sublog) {
 		$username=isset($_POST['username'])?$_POST['username']:'';
 		$password=isset($_POST['password'])?$_POST['password']:'';
 	

 		if (($username !='') && ($password !="")) {
 			$password=md5($password);
 			$logsel="select * from users where username='{$username}' AND user_pass='{$password}'";

 			 $run_log=mysqli_query($con,$logsel);
 				$check=mysqli_num_rows($run_log);
 				
 				 if ($check==1) {

 				$acc=mysqli_fetch_array($run_log);

 					$_SESSION['username']=$acc['$username'];
 					$_SESSION['password']=true;

 						if (isset($_POST[ 'rememberme'])) {
 							$expise=60*60*24+time();
 							setcookie('auto',$username.'|'.$password,$expise);

 						}	
 						header("location: admin/adminpage.php");
 						
 						if ($check) {
 							printf("Error: %s\n",mysqli_error($con));
 						}
 						if (!$acc) {
 							printf("Error: %s\n",mysqli_error($con));
 						}
 				}else{

 					$error['Invalid']='Invalid Login';	
 					echo "<script>alert('password and email is not correct !') </script>";	
 						}

 						
 		}
 	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Log In | Hotel Service</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<!--=================script===================-->
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/slide.js"></script>

</head>
<body>
	<form action="login.php" method="post">
		<h2 class="form-control btn btn-primary ">Log In form...!</h2>
		<hr/>

		<input type="text"  class="form-control input" name="username" maxlength="30" value="<?php echo "$username"; ?>" placeholder="Enter Name / Email" required><small><?php echo $error['username'] ;?></small></br>
		<input type="password"  class="form-control input" name="password" placeholder="Enter password" required ><small><?php echo $error['password'] ;?></small></br>
		<?php $error ?>
		<input type="checkbox" value="1" name="rememberme" id="btn-sub">
		<input type="submit"  id="btn-sub" class="form-control input btn btn-info " name="sublog"value="Log In">
		<a href="index.php"; id="btn-sub" class="form-control input btn btn-info " name="back">Back to hotel</button></br>
		<br/><hr/>

		<?php


		?>
</body>

</html>