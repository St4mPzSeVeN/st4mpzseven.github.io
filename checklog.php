<?php
session_start();
$user = $_GET["usern"];
$pass = $_GET["passw"];
	if(($user=="admin")and($pass=="admin"))
	{header("Location:info.php");}
	else
	{
		include('connect.php');
$user = $_GET["usern"];
$pass = $_GET["passw"];
	$sql = "SELECT * FROM stu_data where std_user = '$user' and std_pass = '$pass'";
	$query = mysqli_query($e,$sql);
	$result = mysqli_fetch_array($query);
	$_SESSION["std_id"] = $result["std_id"];
	$_SESSION["std_name"] = $result["std_name"];
	$_SESSION["std_lname"] = $result["std_lname"];
	
	echo $cnt = mysqli_num_rows($query);
	if($cnt==1)
	{header("Location:infomem.php");}
	else
	{header("Location:errorlogin.php");}
	}
?>