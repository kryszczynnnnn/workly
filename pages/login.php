<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/WhiteOutlineLOGO.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../styles/style-login.css">
    <title>Workly - Login</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container" id="sign-in">
            <span class="login-text">Sign In</span>
            <div class="socials">
                <ul>
                    <li><button id="in-google"><i class="ri-google-fill"></i></button></li>
                    <li><button id="in-facebook"><i class="ri-facebook-circle-fill"></i></button></li>
                    <li><button id="in-apple"><i class="ri-apple-fill"></i></button></li>
                </ul>
            </div>
            <span class="small">or use your email</span>
            <form class="login-form" action="signin.php" method="post">
                <input type="email" name="email" placeholder="Email" class="input-box">
                <input type="password" name="password" placeholder="Password" class="input-box">
                <input type="submit" value="Login" class="submit-btn" name="submit">
            </form>
        </div>
        <div class="form-container" id="sign-up">
            <span class="login-text">Sign Up</span>
            <div class="socials">
                <ul>
                    <li><button id="up-google"><i class="ri-google-fill"></i></button></li>
                    <li><button id="up-facebook"><i class="ri-facebook-circle-fill"></i></button></li>
                    <li><button id="up-apple"><i class="ri-apple-fill"></i></button></li>
                </ul>
            </div>
            <span class="small">or register by using your email</span>
            <form class="register-form" action="signup.php" method="post">
                <input type="text" name="username" placeholder="Username" class="input-box">
                <input type="text" name="name" placeholder="Name" class="input-box">
                <input type="text" name="surname" placeholder="Surname" class="input-box">
                <input type="email" name="email" placeholder="Email" class="input-box">
                <input type="password" name="password" placeholder="Password" class="input-box">
                <input type="password" name="password-repeat" placeholder="Repeat passowrd" class="input-box">
                <div class="terms-checkbox"><input type="checkbox" name="terms" id="termsconditions"><label>I accept terms and conditions.</label></div>
                <input type="submit" name="submit" value="Register" class="submit-btn">
            </form>
        </div>
        <div class="toggle-signup toggle">
            <p class="bold">Already have account?</p>
            <p>Sign In to get access to all features we offer!</p>
            <button class="toggle-btn" id="login-btn">Sign In</button>
        </div>
        <div class="toggle-signin toggle">
            <p class="bold">Doesn't have account?</p>
            <p>Register to get access to all features we offer!</p>
            <button class="toggle-btn" id="register-btn">Sign Up</button>
        </div>
    </div>
    <script src="../scripts/login.js"></script>
</body>
</html>