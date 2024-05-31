
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <form class="form" action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Student id</label>
     	<input type="text" name="studentid" placeholder="Student ID"><br>

     	<label>Email</label>
     	<div style="position:relative;">
			<input type="password" id="password" name="email" placeholder="Email">
			<img src="css/img/visible.png" style="position:absolute;right:15px;bottom:4px;cursor:pointer; width:30px;" onclick="togglePasswordVisibility()" id="togglePassword">
		</div>	
		 <label>Course</label>
		 <select name="department" style="font-size: 20px; width:95%; position:relative; left: 10px; size:20%">

			<option value="">Select your course</option>
			<option name="department">BSIT(Bachelor of Science in Information Technology)</option>
			<option name="department">BSCPE(Bachelor of Science In Computer Engineering)</option>

		 </select><br>


     	<button type="submit" name="login" >Login</button>
     </form>
	 <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var togglePasswordButton = document.getElementById('togglePassword');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePasswordButton.src = "css/img/visible.png"; // change to 'hide password' icon
        } else {
            passwordInput.type = "password";
            togglePasswordButton.src = "css/img/hide.png"; // change back to 'show password' icon
        }
    }
</script>
</body>
</html>