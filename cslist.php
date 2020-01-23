<?php
session_start();
?>

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
	$sql = "SELECT * FROM cs_data
	LEFT JOIN stu_data ON stu_data.std_id = cs_data.std_id
	LEFT JOIN club_data ON club_data.club_id = cs_data.club_id
	";
	
	$query = mysqli_query($e,$sql);
echo $_SESSION["std_id"];
echo $_SESSION["std_name"];
echo $_SESSION["std_lname"];
?>
<table width="1024" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">ชื่อชุมนุม</th>
    <th scope="col">ชื่อนักเรียน</th>
    <th scope="col">ลบ</th>
  </tr>
  <?php
  while($result=mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?php echo $result["club_name"]; ?></td>
    <td><?php echo $result["std_name"]; ?></td>
    <td align="center"><a href="delcsc.php?cs_id=<?php echo $result["cs_id"] ?>">ลบ</a></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>