<?php 

include_once('connection/connection.php');


// $roompost="select * from room";
// $run_roompost=mysqli_query($con,$roompost);
	
	// if($run_roompost){
		// while ($rowroom=mysqli_fetch_array($run_roompost)) {
			// $roomNo=$rowroom['RoomNo'];
			// $badNum=$rowroom['badNum'];
			// $roomtype=$rowroom['roomtype'];
			// $Price=$rowroom['Price'];
			// $Descrition=$rowroom['Descrition'];
			// $image=$rowroom['image'];

			#echo"<div id='img_left'>
				#<img src='/images/$image'>
				

			#</div>";
		// }
	// }

		
?>
<div id="contant">

<!--========================conten-left===================-->
		<div id="roomleft">
			<h3>Catagory</h3>
			<ul>
				<li><a href="#" class="form-control">Room VIP</a></li>
				<li><a href="#" class="form-control">Room Normal</a></li>
				<li><a href="#" class="form-control">Room Luxery</a></li>
			</ul>
		</div>

		
			<?php 	
		$roompost="select * from room";
		$run_roompost=mysqli_query($con,$roompost);
	
		if($run_roompost){
			while ($rowroom=mysqli_fetch_array($run_roompost)) {
			$roomNo=$rowroom['RoomNo'];
			$badNum=$rowroom['badnum'];
			$roomtype=$rowroom['roomType'];
			$Price=$rowroom['prices'];
			$Descrition=$rowroom['description'];
			$image=$rowroom['image'];

			echo"<div id='roomshow'>
		
			<div id='img_left'>
				<img src='images/$image'>
			</div>

			<div id='desciption'>
				Room :<p> $roomNo ;</p>
				Bad : <p> $badNum ;</p>
				Room Type : <p>$roomtype ;</p>
				Price : <p> $Price $;</p><br>
				Description : <p>$Descrition</p>

				<hr>
				<input type='submit' name='btnbooking' value='Book now' class='form-control input'>
				<input type='submit' name='btnbooking' value='Views Now' class='form-control input'>
			</div>
		</div>";
		}
	}
		?>
</div>