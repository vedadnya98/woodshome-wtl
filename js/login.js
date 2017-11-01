$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});






<form action="login.php" method="post">
  <div class="form-group">
    <input type="text" name="username_input" id="username_input" class="username-input" placeholder="Username">
  </div>
  <div class="form-group">
    <input type="password" name="password_input" id="password_input" class="password-input" class="input" placeholder="Password">
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
    <button id="login-button" type="submit" class="form-control btn btn-login">Log In</button>
      </div>
    </div>
  </div>
</form>
<form  action="register.php" method="post">
  <div class="form-group">
    <input type="text" name="fname_input" id="fname_input" class="fname-input" placeholder="First Name" required>
  </div>
  <div class="form-group">
    <input type="text" name="lname_input" id="lname_input" class="lname-input" placeholder="Last Name" required>
  </div>
  <div class="form-group">
    <input type="email" name="email_input" id="email_input" class="email-input" placeholder="Email" required>
  </div>
  <div class="form-group"><button id="logup-button" type="submit">Sign Up</button>
    <input type="text" name="uname_input" id="uname_input" class="username-input" placeholder="Username" required>
  </div>
  <div class="form-group">
    <input type="password" name="pwd_input" id="pwd_input" class="password-input" class="input" placeholder="Password"  required>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <button id="logup-button" type="submit" class="form-control btn btn-register">Sign Up</button>
      </div>
    </div>
  </div>
</form>
