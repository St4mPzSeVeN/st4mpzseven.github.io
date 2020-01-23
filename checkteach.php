<?php
include('connect.php');
$teach_name = $_POST["teach_name"];
$teach_lname = $_POST["teach_lname"];
$teach_club = $_POST["teach_club"];
 echo $sql = "INSERT INTO teach_data(teach_name,teach_lname,teach_club) VALUE('$teach_name','$teach_lname','$teach_club')";
	$query = mysqli_query($e,$sql);
if($query)
	{
		header('Location:infoteach.php');
		}
else
	{
		header('Location:addteach.php');
		}
	

?>