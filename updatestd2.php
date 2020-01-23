<?php
include('connect.php');
$std_name = $_POST["std_name"];
$std_lname = $_POST["std_lname"];
$std_gen = $_POST["std_gen"];
$std_level = $_POST["std_level"];
$std_room = $_POST["std_room"];
$std_user = $_POST["std_user"];
$std_pass = $_POST["std_pass"];
$std_id = $_POST["std_id"];
 echo $sql = "UPDATE stu_data SET std_name = '$std_name', std_lname = '$std_lname', std_gen = '$std_gen', std_level = '$std_level', std_room = '$std_room', std_user = '$std_user', std_pass = '$std_pass' WHERE stu_data.std_id = '$std_id'";
	$query = mysqli_query($e,$sql);
if($query)
	{
		header('Location:stdinfo.php');
		}
else
	{
		header('Location:updatestd.php');
		}
	

?>