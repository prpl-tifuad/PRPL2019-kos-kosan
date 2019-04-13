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
	  
	  <form class="modal-content animate" action="/action_page.php">

		<div class="container">
		  <label for="uname"><b>Username</b></label>
		  <input type="text" placeholder="Enter Username" name="uname" required>

		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw" required>
			
		  <button type="submit">Login</button>
		  <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		  </label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
		  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		  <span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	  </form>
	</div>
<!-- LOGIN FORM (END) -->

<!-- SIGNUP FORM (START) -->
	<div id="id02" class="modal">
	  
	  <form class="modal-content animate" action="/action_page.php">

		<div class="container">
		  <h1>Sign Up</h1>
		  <p>Please fill in this form to create an account.</p>
		  <label for="email"><b>Email</b></label>
		  <input type="text" placeholder="Enter Email" name="email" required>

		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw" required>

		  <label for="psw-repeat"><b>Repeat Password</b></label>
		  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
		  
		  <label>
			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
		  </label>

		  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

		  <div class="clearfix">
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn">Sign Up</button>
		  </div>
		</div>
	  </form>
	</div>
<!-- SIGNUP FORM (END) -->

<?php include('footer.php'); ?> 

</body>
</html>