<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Comfortaa:400,700'>

      <link rel="stylesheet" href="css/login.css">


</head>

<body>
<div class="container">
  <form action="register.php" method="post">
    <div id="login" class="logup">
    <div class="login-icon-field">
      <center><img src="images/login2.png" width="80px" height="80px" class="login-icon"/></center>
    </div>
    <div class="signup-form">
      <div class="fname-row row">
        <input type="text" name="fname_input" id="fname_input" class="fname-input" placeholder="First Name" required></input>
      </div>
      <div class="lname-row row">
        <input type="text" name="lname_input" id="lname_input" class="lname-input" placeholder="Last Name" required></input>
      </div>
      <div class="email-row row">
        <input type="email" name="email_input" id="email_input" class="email-input" placeholder="Email" required></input>
      </div>
      <div class="uname-row row">
        <input type="text" name="uname_input" id="uname_input" class="username-input" placeholder="Username" required></input>
      </div>
      <div class="pwd-row row">
        <input type="password" name="pwd_input" id="pwd_input" class="password-input" class="input" placeholder="Password"  required></input>
      </div>

    </div>
    <div class="call-to-action">
      <button id="logup-button" type="submit">Sign Up</button>
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
