<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connect.php');

?>

<div class="row">
  <div class="col-sm">
  
  </div>
  <div style="text-align: center;" class="col-lg">
    <h1>
  ระบบสมัครชุมนุม โรงเรียนพุนพินพิทยาคม
    </h1>
  </div>
  <div class="col-sm">
  <a style="text-align: right;" href="logout.php">ออกจากระบบ</a>
  </div>
</div>
<div style="text-align: center;">
  ชื่อนักเรียน 
<?php
echo $_SESSION["std_name"];
?> 
<?php
echo $_SESSION["std_lname"];
?>
 รหัสนักเรียน 
  <?php
echo $_SESSION["std_id"];
?>
</div>
<center>
  <p><center>
    <p>ข้อมูลชุมนุม </p>
    <p><form action="" method="post">
    
    <input name="textbox" type="text" /> <button name="a" type="submit"/>
    <span class="glyphicon glyphicon-search">ค้นหา</span>
    </button>
    </form></p>
  </center>
  </p>
<center>
<?php 
$sql = "SELECT * FROM cs_data where std_id = '$_SESSION[std_id]'";
  $query = mysqli_query($e,$sql);
  $result = mysqli_fetch_array($query);
  $cnt = mysqli_num_rows($query);
  if($cnt==1)
{
  ?>
  <table width="1024" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">ชื่อชุมนุม</th>
    <th scope="col">สถานที่เรียน</th>
    <th scope="col">ครูประจำชุมนุม</th>
  </tr>
  <?php
    $sql = "SELECT *,COUNT(cs_id),club_data.club_id as cc FROM club_data
LEFT JOIN cs_data ON club_data.club_id = cs_data.club_id
where cs_data.std_id = '$_SESSION[std_id]'";
  $query = mysqli_query($e,$sql);
  while($result=mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?php echo $result["club_name"] ?></td>
    <td><?php echo $result["club_loc"] ?></td>
    <td><?php echo $result["club_teach"] ?></td>
  </tr><?php } ?>
</table>
  <?php 
  
  }
  
else

{
  
  
?>
  <table width="1024" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">ชื่อชุมนุม</th>
    <th scope="col">สถานที่เรียน</th>
    <th scope="col">ครูประจำชุมนุม</th>
    <th scope="col">จำนวนนักเรียนที่รับ</th>
    <th scope="col">รหัสชุมนุม</th>
    <th scope="col">สมัครชุมนุม</th>
  </tr>
  <?php
  @$textbox = $_POST["textbox"];
     $sql = "SELECT *,COUNT(cs_id),club_data.club_id as cc FROM club_data
LEFT JOIN cs_data ON club_data.club_id = cs_data.club_id
where club_data.club_name like '%$textbox%'
GROUP BY club_data.club_id";
  $query = mysqli_query($e,$sql);
  while($result=mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?php echo $result["club_name"] ?></td>
    <td><?php echo $result["club_loc"] ?></td>
    <td><?php echo $result["club_teach"] ?></td>
    <td><?php echo $result["COUNT(cs_id)"];?>/<?php echo $result["club_maxmem"] ?></td>
    <td><?php echo $result["cc"] ?></td>
    <td align="center">
    <?php
  if($result["COUNT(cs_id)"] == $result["club_maxmem"])
  {
    ?>
    ปิดรับสมัคร
        <?php
    }
  else
  {
    ?><a href="csc.php?club_id=<?php echo $result["cc"] ?>&amp;std_id=<?php echo $_SESSION["std_id"] ?>">สมัครชุมนุม</a><?php
  }
    ?>
    </td>
  </tr><?php } ?>
</table>

  <?php 
  
  }
  
?>
  


</center>

</center>
</body>
</html>