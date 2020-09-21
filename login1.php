<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and registration form</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icon">
                <img src="images/fb.png">
                <img src="images/in.png">
                <img src="images/tw.png">
            </div>
            <form id="login" class="input-group" action="validation.php" method="post">
                <input type="text" name="user" class="input-field" placeholder="User id" required>
                <input type="password" name="password" class="input-field" placeholder="Enter password" required>
                <input type="checkbox" class="chech-box"><span>Remember password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <form id="register" class="input-group" action="registration.php" method="post">
                <input type="text" name="user" class="input-field" placeholder="User id" required>
                <input type="email" name="email" class="input-field" placeholder="Email id" required>
                <input type="text" name="mobile" class="input-field" placeholder="Mobile number" required>
                <input type="password" name="password" class="input-field" placeholder="Enter password" required>
                <input type="checkbox" class="chech-box"><span>I agree</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
        
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register()
        {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login()
        {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>