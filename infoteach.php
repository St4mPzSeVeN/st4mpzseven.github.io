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
	$sql = "SELECT * FROM teach_data";
	$query = mysqli_query($e,$sql);
?>
<p><center>
ระบบสมัครชุมนุม โรงเรียนพุนพินพิทยาคม
</center></p>
<p>&nbsp;

</p>
<center>
  <table width="1028" border="2" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <center>
        <td width="343"><center>
          <a href="addclub.php">เพิ่ม ชุมนุม</a>
        </center></td>
        <td width="342"><center>
          <a href="addteach.php">เพิ่ม ข้อมูลครู</a>
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
    <th scope="col">ชื่อ</th>
    <th scope="col">สกุล</th>
    <th scope="col">ประจำชุมนุม</th>
    <th scope="col">รหัส</th>
    <th scope="col">เพิ่ม</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">ลบ</th>
  </tr>
  <?php
  while($result=mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?php echo $result["teach_name"] ?></td>
    <td><?php echo $result["teach_lname"] ?></td>
    <td><?php echo $result["teach_club"] ?></td>
    <td><?php echo $result["teach_id"] ?></td>
	<td align="center"><a href="addteach.php">เพิ่ม</a></td>
	<td align="center"><a href="updateteach.php?teachid=<?php echo $result["teach_id"]?>">แก้ไข</a></td>
    <td align="center"><a href="delteach.php?teachid=<?php echo $result["teach_id"]?>">ลบ</a></td>

  </tr><?php } ?>
</table>


</center>

</center>
</body>
</html>