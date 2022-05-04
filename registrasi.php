<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Membuat Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<br>
<center><h2>Register Form</h2></center>
<br>
<div class="login">
	<form method="post" action="register.php" onsubmit="return validasi()">
		<div>
			<label>Username : </label>
			<input type="text" name="username" id="username" required>
		</div>
		<div>
			<label>Password : </label>
			<input type="password" name="password" id="password" required>
		</div>
		<div>
			<label>Tulis ulang Password : </label>
			<input type="password" name="password2" id="password2" required>
		</div>
			<button class="tombol" type="submit" name="register">REGISTER</button>
		</form>
		<br>
		<br>
		<br>
		<br>
		Sudah punya akun? <a href="index.php">Login</a>
</div>

<script type="text/javascript">
	function validasi (){
		var username=document.getElementById("username").value;
		var password=document.getElementById("password").value;
		var password2=document.getElementById("password2").value;

		if(password!==password2!=""){
			alert('Password tidak sama Bro');
			return false;

		}else{
	
			return true;
		}
	}
	

</script>

</body>
</html>