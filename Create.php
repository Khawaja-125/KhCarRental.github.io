<?php
$usname = $_POST['uname'];
$usmail = $_POST['umail'];
$uspass = $_POST['upass'];
$ucpass = $_POST['ucpass'];

$conn = mysqli_connect("localhost" ,"root", "" , "car_rental") ;
$sql = "INSERT INTO car(username , email, pass, cfpass)
 VALUES ('{$usname}', '{$usmail}','{$uspass}' ,'{$ucpass}')";
$result = mysqli_query($conn , $sql) or die("Data not Stored");
mysqli_close($conn);

if($result){
  echo "Registered Successfully";
}
else{
  echo "Connection Failed" ;
}
?>