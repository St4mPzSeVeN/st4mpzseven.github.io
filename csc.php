<?php
include('connect.php');
$std_id = $_GET["std_id"];
$club_id = $_GET["club_id"];
	$sql = "INSERT INTO cs_data (std_id, club_id) VALUE ('$std_id','$club_id')
";
	$query = mysqli_query($e,$sql);
	if($query)
	{echo header("Location:infomem.php");
	 }
	 
	else
	{header("Location:infomem.php");}
	//echo $cnt = mysqli_num_rows($query);
	//if($cnt==1)
	//{header("Location: info.php");}
	//{echo"<meta http-equiv='refresh' content='0;url=info.php'>";}
	//else
	//{header : ("Location : login.php");}
	//{echo"<meta http-equiv='refresh' content='0;url=login.php'>";}
	
?>