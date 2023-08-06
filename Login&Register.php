<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & SignUp Form</title>
    <link rel="stylesheet" href="FormStyle.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="login-reg-img/fb.png" alt="">
                <img src="login-reg-img/gp.png" alt="">
                <img src="login-reg-img/tw.png" alt="">
            </div>    
        <form action="Login.php" method="post" id="login" class="input-group">
            <input type="text" class="input-field" name="usname" required  placeholder="Enter Username">
            <input type="password" class="input-field" name="uspass" required  placeholder="Enter Password">
            <input type="checkbox" class="check-box" required><span>Remember Password</span>
            <button type="submit" class="submit-btn">Login</button>     
        </form>
<form action="Create.php" onsubmit="return validate()" method="post" id="register" class="input-group">
            <input type="text" class="input-field" name="uname" required placeholder="Enter Username">
            <input type="email" class="input-field" name="umail" required  placeholder="Enter Email">
            <input type="password" class="input-field"  name="upass"  required placeholder="Enter Password">
            <input type="password" class="input-field"  name="ucpass" required  placeholder="Confirm Password">
            <input type="checkbox" class="check-box" required><span>I agree to the terms & conditions.</span>
            <button type="submit" class="submit-btn" >Register</button>     
        </form>

        </div>
    </div>
    <script>
        let x = document.getElementById('login');
        let y = document.getElementById('register');
        let z = document.getElementById('btn');
   function validate() {
    var pass = document.forms['register']['upass'].value;
    var cpass = document.forms['register']['ucpass'].value;
    
   if (pass != cpass) {
        alert("Passwords do not match.");
        return false;
    }
}
        
        function register(){
            x.style.left = '-400px';
            y.style.left = '50px' ;
            z.style.left = '110px';
        }
        function login(){
            x.style.left = '50px';
            y.style.left = '450px' ;
            z.style.left = '0px';
        }
    </script>
</body>
</html>