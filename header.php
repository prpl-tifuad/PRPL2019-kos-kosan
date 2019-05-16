<link href="css/header.css" type="text/css" rel="stylesheet" />
<link href="css/login.css" type="text/css" rel="stylesheet" />
<!-- HEADER START -->
	<header>
	<div id="header">
	  <a href="index.php" class="logo">CompanyLogo</a>
	  
	  <div class="header-right">
		<a class="active" href="index.php">Home</a>
		<a href="kamar.php">Kamar</a>
		<a href="fasilitas.php">Fasilitas</a>
		<a href="about.php">Tentang Kami</a>
		<a class="active" href="#login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
		<a class="active" href="#signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Signup</a>
	  </div>
	  
	</div>
	</header>

	<!-- LOGIN FORM (START) -->
	<div id="id01" class="modal">
	  <form class="modal-content animate" method="POST" action="login.php">
		<div class="container">
		  <label for="username"><b>Username</b></label>
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

		  <label for="username"><b>Username</b></label>
		  <input type="text" placeholder="Enter Username" name="username" required="">

		  <label for="password"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="password" required>

		  <label for="confirm-password"><b>Confirm Password</b></label>
		  <input type="password" placeholder="Confirm Password" name="confirm-password" required>
		  
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
<!-- HEADER END -->