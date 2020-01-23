<?php
include('connect.php');
$k = $_GET["teachid"];
 $sql = "DELETE FROM teach_data WHERE teach_id = '$k'";
  $query = mysqli_query($e,$sql);
 header("Location:infoteach.php");
  
?>