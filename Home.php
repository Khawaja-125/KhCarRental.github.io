<?php
 session_start();
 if(isset($_SESSION['id'])&& isset($_SESSION['username'])){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
    <h1>Welcome to Khawaja Rent a Car!, <?php echo $_SESSION['username']; ?></h1><br>
    <h1><i><strong>Car Rented Successfully!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
 } 
 else{
    header("location:Form.php");
    exit();
 }
?>