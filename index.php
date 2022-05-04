<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form login</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<br>
	<center><h2>Login Form</h2></center>
	<br>
	<div class="login">
		<form method="post"action="login.php" onsubmit=" return validasi()">
			<div>
				<label>Username :</label>
				<input type="text" name="username" id="username">
			</div>
		
			<div>
				<label>Password :</label>
				<input type="password" name="password" id="password">
			</div>
		
			<div class="tombol">
				<button type="submit"name="login">LOGIN</button>
				
			</div>

		</form>
		Belum punya akun ? <a href="registrasi.php">Registrasi</a>
	</div>
	 
	 <script type="text/javascript">
	 	function validasi (){
	 		var username=document.getElementById("username").value;
	 		var password=document.getElementById("password").value;

	 		if (username!=""&&password!=""){
	 			return true;
	 		}else {
	 			alert('Harap Diisi username dan password')

	 			return false;
	 		}
	 	}


	 </script>
</body>
</html>