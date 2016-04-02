<?php
	
	$con=mysqli_connect("localhost","root","","webhotel") or die("Connection was no established");

	///----------------insertroom----------------
	//
	//
	function Home_post(){
	global $con;
	$get_home_post="select * from locationhotel";
	$run_home_post=mysqli_query($con,$get_home_post);
		if ($run_home_post) {
			while ($row=mysqli_fetch_array($run_home_post)) {
				$loc_id=$row['loc_id'];
				$loc_name=$row['loc_name'];
				$description=$row['description'];
				$images=$row['image'];
				
			}
		}

	}

//--------------------get roomid--------------------------
	function getLocation(){
	global $con;
	$get_room = "select * from locationhotel";
			$run_room=mysqli_query($con,$get_room);
			if($run_room){
				while($row = mysqli_fetch_array($run_room)){
					$loc_id=$row['loc_id'];
					$loc_name=$row['loc_name'];
					echo "<option value='$loc_id'>$loc_id</option>";

					}
				}else{
					die("Error Query ".mysqli_error($con));
				}
	}
//--------------------get roomid--------------------------
	function getLocationname(){
	global $con;
	$get_room = "select * from locationhotel";
			$run_room=mysqli_query($con,$get_room);
			if($run_room){
				while($row = mysqli_fetch_array($run_room)){
					$loc_id=$row['loc_id'];
					$loc_name=$row['loc_name'];
					echo "<option value='$loc_name'>$loc_name</option>";
						
					}
				}else{
					die("Error Query ".mysqli_error($con));
				}
	}

	//--------------------get roomid--------------------------
	function getRoomid(){
	global $con;
	$get_room = "select * from room";
			$run_room=mysqli_query($con,$get_room);
			if($run_room){
				while($row = mysqli_fetch_array($run_room)){
					$room_id=$row['RoomNo'];
					#$topic_title=$row['topic_title'];
					echo "<option value='$room_id'>$room_id</option>";
					}
				}else{
					die("Error Query ".mysqli_error($con));
				}
	}

//==========================contact=========================
	function getContact(){
		global $con;
		$select_contact="select * from locationhotel";
		$run_select_con=mysqli_query($con,$select_contact);
		if($run_select_con){
			while ($row_contact=mysqli_fetch_array($run_select_con)) {
				$lo_name=$row_contact['loc_name'];
				$descriptions=$row_contact['Description'];
				$imag=$row_contact['image'];
				$email=$row_contact['Email'];
				$phone=$row_contact['phone'];


				echo "<div id='contact'>
						<img src='images/$imag'>
						<div id='con_right'<p>$loc_name</p><p>$phone</p></div>
					</div>";
			}
		}
	}
?>