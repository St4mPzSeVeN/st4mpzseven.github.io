 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
      &nbsp;
  <div class="row">
    <div class="col-lg-5">
    </div>
    <div class="col-sm-2">
  <div class="border">
  <h1 style="text-align: center;">สมัครสมาชิก</h1>
<center><form action="checkregis.php" method="post"><table width="270" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="126">ชื่อ</td>
    <td width="144"><input name="std_name" type="text" required="required"/></td>
  </tr>
  <tr>
    <td>สกุล</td>
    <td><input name="std_lname" type="text" required="required"/></td>
  </tr>
  <tr>
    <td>เพศ</td>
    <td><input name="std_gen" type="radio" value="1" required="required"/>ชาย<input name="std_gen" type="radio" value="2" required="required"/>หญิง</td>
  </tr>
  <tr>
    <td>ระดับชั้น</td>
    <td><select name="std_level" required="required">
      <option value="m1">ม.1</option>
      <option value="m2">ม.2</option>
      <option value="m3">ม.3</option>
      <option value="m4">ม.4</option>
      <option value="m5">ม.5</option>
      <option value="m6">ม.6</option>
    </select></td>
  </tr>
  <tr>
    <td>ห้อง</td>
    <td><input name="std_room" type="text" required="required"/></td>
  </tr>
  <tr>
    <td>รหัสนักเรียน</td>
    <td><input name="std_id" type="text" required="required"/></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input name="std_user" type="text" required="required"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="std_pass" type="password" required="required"/></td>
  </tr>
</table>
    <p>
      <input name="submit" type="submit" class="btn btn-success" value="ตกลง" />
    </p>
</form></center>

</div>
</div>
<div class="col-lg-5">
  </div>
</div>
</body>
</html>