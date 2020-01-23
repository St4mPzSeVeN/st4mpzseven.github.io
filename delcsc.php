<?php
include('connect.php');
$k = $_GET["cs_id"];
 $sql = "DELETE FROM cs_data WHERE cs_id = '$k'";
  $query = mysqli_query($e,$sql);
 header("Location:cslist.php");
  
?>