<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="{{ asset('style/signup.css') }}">
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- ICON FONT -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- CSS HALAMAN REGISTER -->
  <link rel="stylesheet" href="register.css">
</head>

<body>

  <div class="register-wrapper">
    <div class="register-box">
      <div class="white-panel"></div>

      <div class="form-panel">
        <h2>Create<br><span>An Account</span></h2>

        <form>
          <div class="name-group">
            <input type="text" placeholder="Front Name" required />
            <input type="text" placeholder="Back Name" required />
          </div>

          <input type="email" placeholder="Email" required />
          <input type="password" placeholder="Password" required />
          <input type="password" placeholder="Confirm Password" required />

          <button class="create-btn" type="submit">Create Account</button>

          <p class="login-text">
            Already Have Account? <a href="login.html">Log in</a>
          </p>

          <div class="social-buttons">
            <button class="fb"><i class="fab fa-facebook-f"></i> Facebook</button>
            <button class="google"><i class="fab fa-google"></i> Google</button>
          </div>
        </form>

      </div>
    </div>
  </div>

</body>
</html>
