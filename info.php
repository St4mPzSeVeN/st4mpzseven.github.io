<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connect.php');
	$sql = "SELECT * FROM club_data";
	$query = mysqli_query($e,$sql);
?>
<div class="row">
  <div class="col">

  </div>
  <div class="col">
    <center>
ระบบสมัครชุมนุม โรงเรียนพุนพินพิทยาคม
    </center>
  </div>
  <div class="col">
<a style="text-align:center;" href="logout.php">ออกจากระบบ</a>
  </div>
</div>

</p>

<p>&nbsp;

</p>
<center>
  <table width="1028" border="2" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <center>
        <td width="343"><center>
          <a href="addclub.php">เพิ่ม/ลบ ชุมนุม</a>
        </center></td>
        <td width="342"><center>
          <a href="addteach.php">เพิ่ม/ลบ ข้อมูลครู</a>
        </center></td>
        <td width="343"><center>
          <a href="register.php">เพิ่ม ข้อมูลนักเรียน</a>
        </center></td>
      </center>
    </tr>
    <tr>
      <td align="center"><a href="info.php">รายชื่อชุมนุม</a></td>
      <td align="center"><a href="infoteach.php">รายชื่อครู</a></td>
      <td align="center"><a href="stdinfo.php">รายชื่อนักเรียน</a></td>
    </tr>
  </table>
  <p>&nbsp;	
  </p>
  <p><center>
  ข้อมูลชุมนุม
  </center></p>
  <p>&nbsp;
  </p>
<center>
<table width="1024" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">ชื่อชุมนุม</th>
    <th scope="col">สถานที่เรียน</th>
    <th scope="col">ครูประจำชุมนุม</th>
    <th scope="col">จำนวนนักเรียนที่รับ</th>
    <th scope="col">รหัสชุมนุม</th>
    <th scope="col">สมัครชุมนุม</th>
    <th scope="col">ลบ</th>
    <th scope="col">แก้ไข</th>
  </tr>
  <?php
  while($result=mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?php echo $result["club_name"] ?></td>
    <td><?php echo $result["club_loc"] ?></td>
    <td><?php echo $result["club_teach"] ?></td>
    <td><?php echo $result["club_maxmem"] ?></td>
    <td><?php echo $result["club_id"] ?></td>
    <td align="center">สมัครชุมนุม</td>
    <td align="center"><a href="delclub.php?clubid=<?php echo $result["club_id"] ?>">ลบ</a></td>
    <td align="center"><a href="updateclub.php?clubid=<?php echo $result["club_id"] ?>">แก้ไข</a></td>
  </tr><?php } ?>
</table>


</center>

</center>
</body>
</html>