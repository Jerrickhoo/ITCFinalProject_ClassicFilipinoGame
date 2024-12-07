<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="login-register-container">
    <!-- Register Section -->
    <div class="form-container" id="registerForm" style="display: none;">
      <h1>Register</h1>
      <form action="register.php" method="post">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="fName" placeholder="First Name" required>
        </div>
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="lName" placeholder="Last Name" required>
        </div>
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn" name="signUp">Sign Up</button>
      </form>
      <p>Already have an account? <button class="switch-button" onclick="showLogin()">Sign In</button></p>
    </div>

    <!-- Login Section -->
    <div class="form-container" id="loginForm">
      <h1>Login</h1>
      <form action="register.php" method="post">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn" name="signIn">Login</button>
      </form>
      <p>Don't have an account? <button class="switch-button" onclick="showRegister()">Sign Up</button></p>
    </div>
  </div>

  <script src="login.js"></script>

</body>

</html>