<?php
include('connect.php');
$club_name = $_POST["club_name"];
$club_id = $_POST["club_id"];
$club_teach = $_POST["club_teacher"];
$club_loc = $_POST["club_loc"];
$club_maxmem = $_POST["club_maxmem"];
 echo $sql = "INSERT INTO club_data(club_name,club_loc,club_id,club_teach,club_maxmem) VALUE('$club_name','$club_loc','$club_id','$club_teach','$club_maxmem')";
	$query = mysqli_query($e,$sql);
if($query)
	{
		header('Location:info.php');
		}
else
	{
		header('Location:addclub.php');
		}
	

?>