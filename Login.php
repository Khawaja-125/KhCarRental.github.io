<?php
session_start();
include "Database.php";
if(isset($_POST['usname'])&& isset($_POST['uspass'])){
}    
       function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
$uname =($_POST['usname']);
$upass =($_POST['uspass']);
if(empty($uname)){
    header("location:Login&Register.php? error = Username is Required");
    exit();
}
elseif(empty($upass)){
    header("location:Login&Register.php? error = Password is Required");
    exit();    
}
$sql = "SELECT * FROM car WHERE username = '$uname' && pass = '$upass' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] == $uname && $row['pass'] == $upass){
        echo "Logged In!";
        $_SESSION['username'] = $row['username']; 
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id']; 
       header("location:Rent.php");
       exit();
    }
    else{
        header("location:Login&Register.php? error = Incorrect Username or Password");
        exit();
    }
}
else{
    header("location:Login&Register.php");
    exit();
}
?>