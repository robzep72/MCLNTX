<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="StyleLogin.css" rel="stylesheet" type="text/css">
<link href="StyleLogin.css" rel="stylesheet" type="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">

	
	<title>Members Only</title>

</head>

<body>
	<div class="form-box">
	<h1>Member Login</h1>
		<div class="input-box">
			<i class="fa-solid fa-at"></i>
			<i class="fa-solid fa-envelope"></i>
			<input type="email" placeholder="Email ID">
		</div>
		<div class="input-box">
			<i class="fa-solid fa-key"></i>
			<input type="password" placeholder="password" id="myInput">
			<span class="eye" onclick="myfunction()">
				<i id="hide1" class="fa-solid fa-eye"></i>
				<i id="hide2" class="fa-solid fa-eye-slash"></i>
			</span>
		</div>
		<button type="button" class="login-btn">Login</button>
	</div>
	
	<script>
			function myfunction() {
				var x = document.getElementById("myInput")
				var y = document.getElementById("hide1")
				var z = document.getElementById("hide2")
				
				if(x.type === 'password') {
					x.type = "text";
					y.style.display = "block";
					z.style.display = "none";
				}
				
				else {
					x.type = "password";
					y.style.display = "none";
					z.style.display = "block";
				}
			}
	</script>

</body>
</html>