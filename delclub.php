<?php
include('connect.php');
$k = $_GET["clubid"];
 $sql = "DELETE FROM club_data WHERE club_id = '$k'";
  $query = mysqli_query($e,$sql);
 header("Location:info.php");
  
?>