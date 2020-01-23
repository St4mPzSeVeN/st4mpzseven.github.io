<?php
include('connect.php');
$user = $_POST["std_user"];
$pass = $_POST["std_pass"];
$f = $_POST["std_name"];
$g = $_POST["std_lname"];
$h = $_POST["std_gen"];
$i = $_POST["std_level"];
$j = $_POST["std_room"];
$k = $_POST["std_id"];
	$checkstd = "SELECT std_name, std_lname FROM stu_data WHERE std_name = '$f' and std_lname = '$g'";
	$checkstd2 = mysqli_query($e,$checkstd);
	$cntstd = mysqli_num_rows($checkstd2);
	$checkstd3 = "SELECT * FROM stu_data WHERE std_user = '$user' and std_pass = '$pass'";
	$checkstd4 = mysqli_query($e,$checkstd3);
	$cntstd2 = mysqli_num_rows($checkstd4);
	if($cntstd >= 1)
	{
		header("Location:errorregis.php");
	}
	
	else if ($cntstd2 >=1)
	{
		header("Location:errorregis.php");
	}
	else
	{
		$sql = "INSERT INTO stu_data (std_user,std_pass,std_name,std_lname,std_gen,std_level,std_room) VALUE ('$user','$pass','$f','$g','$h','$i','$j')";
		$query = mysqli_query($e,$sql);
		if($query)
		{
			echo header("Location:infomem.php");
		}
	 
		else
		{
			header("Location:register.php");
		}
	//echo $cnt = mysqli_num_rows($query);
	//if($cnt==1)
	//{header("Location: info.php");}
	//{echo"<meta http-equiv='refresh' content='0;url=info.php'>";}
	//else
	//{header : ("Location : login.php");}
	//{echo"<meta http-equiv='refresh' content='0;url=login.php'>";}
	}
?>