<html>
<head>
	<link href="css/index.css" type="text/css" rel="stylesheet" />
	<link href="css/login.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="script/form.js"></script>
	
</head>
<body>
<?php include('header.php'); ?> 

<!-- LOGIN FORM (START) -->
	<div id="id01" class="modal">
	  
	  <form class="modal-content animate" method="POST" action="login.php">

		<div class="container">
		  <label for="username"><b>Email / Username</b></label>
		  <input type="text" placeholder="Enter Username" name="username" required>

		  <label for="password"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="password" required>
			
		  <button type="submit" name="login">Login</button>
		  <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		  </label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
		  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		  <span class="password">Forgot <a href="#">password?</a></span>
		</div>
	  </form>
	</div>
<!-- LOGIN FORM (END) -->

<!-- SIGNUP FORM (START) -->
	<div id="id02" class="modal">
	  
	  <form class="modal-content animate" method="POST" action="register.php">

		<div class="container">
		  <h1>Register</h1>
		  <p>Silahkan isi form pendaftaran dibawah ini</p>
		  <label for="email"><b>Email</b></label>
		  <input type="text" placeholder="Enter Email" name="email" required>

		  <label for="username"><b>Username</b></label>
		  <input type="text" placeholder="Enter Username" name="username" required="">

		  <label for="password"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="password" required>

		  <label for="password-repeat"><b>Repeat Password</b></label>
		  <input type="password" placeholder="Repeat Password" name="password-repeat" required>
		  
		  <label>
			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
		  </label>

		  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

		  <div class="clearfix">
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn" name="register">Register</button>
		  </div>
		</div>
	  </form>
	</div>
<!-- SIGNUP FORM (END) -->

<?php include('footer.php'); ?> 

</body>
</html>