<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            margin: 0;
            color: #4a4a4a;
        }
        .login-container {
            width: 280px;
            padding: 20px;
            text-align: center;
        }
        .login-container h2 {
            font-size: 26px;
            color: #4a90e2;
            font-weight: 500;
            margin-bottom: 25px;
        }
        .login-container img {
            width: 50px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
            border-bottom: 1.5px solid #9bb9d6;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
            font-size: 16px;
            color: #4a4a4a;
            background: none;
            caret-color: #4a90e2;
        }
        .form-group input::placeholder {
            color: #9bb9d6;
        }
        .form-group .eye-icon {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
            font-size: 18px;
            color: #333;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 14px;
            color: #4a4a4a;
        }
        .remember-me input {
            margin-right: 8px;
        }
        .btn {
            width: 100%;
            margin-top: 10px;
            padding: 12px;
            background-color: #4a90e2;
            border: none;
            color: white;
            font-weight: 500;
            font-size: 16px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #3c7bc6;
        }
        .forgot-password, .sign-up {
            margin-top: 12px;
            font-size: 14px;
        }
        .forgot-password a, .sign-up a {
            color: #4a90e2;
            text-decoration: none;
        }
        .forgot-password a:hover, .sign-up a:hover {
            color: #3c7bc6;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #9bb9d6;
        }
        .google-signin-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-top: 15px;
            padding: 12px;
            background-color: white;
            color: black;
            font-weight: 500;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            gap: 12px; /* Adjust space between the Google logo and the text */
        }
        .google-signin-btn:hover {
            /* background-color: #eee; */
            /* padding: 20px; */
        }
        .google-signin-btn img {
            width: 20px; /* Adjust the size of the Google logo */
            height: 20px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="assets/img/users.png" alt="Users Logo">
        <h2>Sign In</h2>
        <form id="loginForm" method="POST" action="index.php">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span class="eye-icon" id="eye-icon" onclick="togglePasswordVisibility()">👁️</span>
            </div>
            <div class="remember-me">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember Me</label>
            </div>
            <div class="forgot-password">
                <a href="forgot_password.php">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>

            <style>
                .google-signin-btn{
                    display:flex;
                    margin: auto
                }
                .google-signin-btn img{
                    margin-top: 18px;
                }
            </style>
            <!-- Google Sign In Button -->
            <button class="google-signin-btn">
                <img src="assets/img/google.svg" alt="Google Logo"> 
                <span>Sign in with Google</span>
            </button>
        </form>
        <div class="sign-up">
            <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
        </div>
    </div>
    <div class="footer">
        &copy; <span id="year"></span> Managed by BC
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

    <!-- Tawk.to Script -->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/672e76b34304e3196adf74b9/1ic6nvdij';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
</body>
</html>
