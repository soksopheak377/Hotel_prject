<?php

include_once('../connection/connection.php');
include_once('../function/function.php');

if(isset($_POST['loc_post'])){

	$locationid=$_POST['locationID'];
	$Location=$_POST['location'];
	$image=$_FILES['imag']['name'];
	$image_tmp=$_FILES['imag']['tmp_name'];
	$textarea=$_POST['textarea'];

	move_uploaded_file($image_tmp, "../../images/$imag");
	$insertpost="update  locationhotel set loc_name='$location',Description='$textarea',image='$image' where loc_id='$locationid' ";
	$run_insertpost=mysqli_query($con,$insertpost);

	if ($run_insertpost) {
		echo "<scription>alert('You have update susseccful...')</scription>";
		header("location: admin/adminpage.php");
	}
}

//---------------------------------------select location name -----------------

// $select_locid="select * from room order by RoomNo ";
// $run_select=mysqli_query($con,$select_locid);
// if ($run_select) {

// 	while ($rowselect=mysqli_fetch_array($run_select)) {
// 		$loc_id=$rowselect['RoomNo'];
// 	}
	
// }
?>




<form action="adminpage" method="post" enctype="multipart/form-data">
			 		<table>
			 			

			 			<tr>
			 				<td id="td1">Location ID :</td>
			 				<td id="td2">
			 					<select class="form-control" name="locationID">
			 					<OPTION>Select location ID</OPTION>
			 					<?php getLocation(); ?>
			 				</select>
			 				</td>
			 			</tr>

			 			<tr>
			 				<td id="td1">Location :</td>
			 				<td id="td2"> 
			 				<select class="form-control" name="location">
			 					<OPTION>Select location name</OPTION>
			 					<?php getLocationname();?>
			 				</select>
			 				</td>
			 			</tr>

			 			<tr>
			 				<td id="td1">Images :</td>
			 				<td id="td2"><input type="file" name="imag"></td>
			 			</tr>


			 			<tr>
			 				<td id="td1">Description :</td>
			 				<td id="td2"><textarea rows="15" cols="120" id="txtarea" name="textarea"></textarea></td>
			 			</tr>

			 			<tr>
			 				<td id="td1"></td>
			 				<td id="td2" ><input type="submit" name="loc_post" value="Post" class="form-control btn btn-info"></td>
			 			</tr>

			 		</table>
			 		
			 	</form>
