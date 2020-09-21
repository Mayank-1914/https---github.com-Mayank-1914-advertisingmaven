<?php
session_start();
header('location:login1.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
 $s = "select * from table2 where name = '$name'";

 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);
 if($num == 1)
 {
     echo "user name already taken";
 }
 else{
     $reg = "insert into table2(name,email,mobile,password) values('$name','$email','$mobile','$password')";
     mysqli_query($con, $reg);
     echo "Registration successful";
 }
?>