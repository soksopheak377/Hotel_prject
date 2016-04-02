<div id="contant">

<!--========================conten-left===================-->
		<div id="content_left">
		 			 	
			 	<?php
			 	$get_home_post="select * from locationhotel";
			$run_home_post=mysqli_query($con,$get_home_post);
			if ($run_home_post) {
				while ($row=mysqli_fetch_array($run_home_post)) {
				#$loc_id=$row['loc_id'];
				$loc_name=$row['loc_name'];
				$description=$row['Description'];
				$images=$row['image'];
				echo "<div id='detail'><h3>$loc_name</h3><img src='images/$images'><p>$description</p></div>";
				}
			}else{
						die("Error Query ".mysqli_error($con));
					}
					

			 	?>
			 

			 <hr/>
		 </div>	
<!--========================conten-right===================-->
		 <div id="content_right">
		  <img src="images/room1.jpg">
		  <img src="images/room2.png">
		  <img src="images/room3.png">
		  
		 </div>
</div>