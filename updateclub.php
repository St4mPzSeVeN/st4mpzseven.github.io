<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connect.php");
$l = $_GET["clubid"];
echo $sql = "SELECT * FROM club_data Where club_id = '$l'";
$query = mysqli_query($e,$sql);
$result = mysqli_fetch_array($query);
?>
<p>&nbsp;

</p>
<center>
  <p>แก้ไขชุมนุมใหม่ </p>
  <p>&nbsp;</p>
</center>
<center><div><form action="updateclub2.php" method="post"><center>
<table width="308" border="0" cellspacing="0" cellpadding="0">
  <center>
  <tr>
    <td width="131">ชื่อชุมนุม</td>
    <td width="177"><input name="club_name" type="text" value="<?php echo $result["club_name"]?>" /></td>
  </tr>
  <tr>
    <td>รหัสชุมนุม</td>
    <td><input name="club_id" type="text" value="<?php echo $result["club_id"]?>" readonly="readonly"/></td>
  </tr>
  <tr>
    <td>ครูที่ปรึกษาชุมนุม</td>
    <td><input name="club_teacher" type="text" value="<?php echo $result["club_teach"]?>"/></td>
  </tr>
  <tr>
    <td>สถานที่เรียน</td>
    <td><input name="club_loc" type="text" value="<?php echo $result["club_loc"]?>" /></td>
  </tr>
  <tr>
    <td>จำนวนที่รับ</td>
    <td><input name="club_maxmem" type="number" value="<?php echo $result["club_maxmem"]?>"/></td>
  </tr></center>
</table>
<p><input name="submit" type="submit" value="ตกลง" /></p>
</center>
</form></div></center>
</body>
</html>