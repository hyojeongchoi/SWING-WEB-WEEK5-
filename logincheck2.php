<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
$query= "select * from mydb where id= '$id' and pwd='$pwd';";
$result= mysqli_query($conn,$query) or die("query error");
$row = mysqli_fetch_array($result)
//$queryid= "select id from mydb where id= '{$_POST['id']}';";
//$resultid= mysqli_query($conn,$queryid) or die("query error");
//$querypwd= "select pwd from mydb where pwd= '{$_POST['pwd']}';";
//$resultpwd= mysqli_query($conn,$querypwd) or die("query error");

if (($row['id'] ==$id]) && ($row['pwd'] ==$pwd))
{
  $_SESSION['id']=$row['id'];
  $_SESSION['pwd']=$row['pwd'];
  header("location: index2.php");
}
else{
  echo "잘못된 정보입니다.";
  //echo "<input type="button" name="success" value="OK" onclick="location.href='login.php'">";
}
mysqli_close($conn);
 ?>
//아예 연동이 안되는건지 계속 에러가 뜨는데 어떤 부분이 문제인지 잘 모르겠습니다ㅜㅜㅜ
