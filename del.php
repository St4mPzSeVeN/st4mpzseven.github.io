<?php
include('connect.php');
$k = $_GET["stdid"];
 $sql = "DELETE FROM stu_data WHERE std_id = '$k'";
  $query = mysqli_query($e,$sql);
 header("Location:stdinfo.php");
  
?>