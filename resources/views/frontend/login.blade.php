<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="{{ asset('style/login.css') }}">
      <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
  </style>
</head>
<body>
  <div class="container">
    <div class="left"></div>
    <div class="right">
      <h2>Welcome Back</h2>
      <div class="input-box">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
      </div>
      <button class="login-btn">Login</button>
      <p class="signup">Don't Have Account?<a href="register.html">Register</a></p>
      <div class="social-login">
        <div class="social-btn">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"> Facebook
        </div>
        <div class="social-btn">
          <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Google"> Google
        </div>
      </div>
    </div>
  </div>
</body>
</html>
