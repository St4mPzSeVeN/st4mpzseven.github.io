<?php
include('connect.php');
$teach_name = $_POST["teach_name"];
$teach_lname = $_POST["teach_lname"];
$teach_club = $_POST["teach_club"];
$a = $_POST["teacher_id"];
 echo $sql = "UPDATE teach_data SET teach_name = '$teach_name', teach_lname = '$teach_lname', teach_club = '$teach_club' WHERE teach_data.teach_id = '$a'
";
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