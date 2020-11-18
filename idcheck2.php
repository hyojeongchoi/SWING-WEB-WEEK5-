<?php
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
$query= "select * from mydb where id= '{$_POST['id']}';";
$result= mysqli_query($conn, $query) or die("query error");
$count=mysqli_num_rows($result);

if ($count==1) {
  echo "중복된 ID입니다.";
  //echo "<input type= "reset" name="signup" value="sign up" onclick="location.href='signup2.php'">";
  //<br>;

}
else if ($count==0)
{
  echo "sign up success";
  $savequery= "insert into mydb values ('{$_POST['id']}', '{$_POST['pwd']}', '{$_POST['name']}','{$_POST['email']}');";
  $saveresult=mysqli_query($conn, $savequery) or die("Query Error!");
  //echo "<input type="button" name="success" value="OK" onclick="location.href='login2.php'">";
}
else {}
 ?>
