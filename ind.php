<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/Signup</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Comfortaa:400,700'>

      <link rel="stylesheet" href="css/login.css">


</head>

<body>
<div class="container">
  <form action="login.php" method="post">
    <div id="login" class="login">
      <div class="login-icon-field">
        <center><img src="images/login2.png" width="80px" height="80px" class="login-icon"/></center>
      </div>
    <div class="login-form">
      <div class="username-row row">
        <label for="username_input">
        </label>
        <input type="text" name="username_input" id="username_input" class="username-input" placeholder="Username"></input>
      </div>
      <div class="password-row row">
        <label for="password_input">
        </label>
        <input type="password" name="password_input" id="password_input" class="password-input" class="input" placeholder="Password"></input>
      </div>
    </div>
    <div class="call-to-action">
      <button id="login-button" type="submit">Log In</button>
      <p>Don't have an account? <a href="signup.php">SignUp</a></p>
    </div>

    </div>
</form>
    </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js'></script>
<script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.ui.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
