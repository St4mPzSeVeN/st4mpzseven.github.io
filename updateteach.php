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
$l = $_GET["teachid"];
$sql = "SELECT * FROM teach_data Where teach_id = '$l'";
$query = mysqli_query($e,$sql);
$result = mysqli_fetch_array($query);
?>
<p>&nbsp;

</p>
<center>
  <p>แก้ไขข้อมูลครู </p>
  <p>&nbsp;</p>
</center>
<center><div><form action="updateteacher.php" method="post"><center>
<table width="308" border="0" cellspacing="0" cellpadding="0">
  <center>
  <tr>
    <td width="131">ชื่อ</td>
    <td width="177"><input name="teach_name" type="text" value="<?php echo $result["teach_name"]?>" /></td>
  </tr>
  <tr>
    <td>นามสกุล</td>
    <td><input name="teach_lname" type="text" value="<?php echo $result["teach_lname"]?>" /></td>
  </tr>
  <tr>
    <td>ชุมนุมที่ดูแล</td>
    <td><input name="teacher_id" type="hidden" id="teacher_id" value="<?php echo $l ?>" />      <input name="teach_club" type="text" value="<?php echo $result["teach_club"]?>" /></td>
   </tr></center>
</table>
<p><input name="submit" type="submit" value="ตกลง" /></p>
</center>
</form></div></center>
</body>
</html>