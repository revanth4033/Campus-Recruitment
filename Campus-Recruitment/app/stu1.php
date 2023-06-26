<!DOCTYPE html>
<html>
<head>
	<title>Log and Reg</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-image: url("4.png");
		}
		header {
			
			color: #fff;
			padding: 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		header a {
			color: #fff;
			text-decoration: none;
			margin-left: 20px;
		}
		header a:hover {
			text-decoration: underline;
		}
		.logo {
			max-width: 100px;
			margin-left: 20px;
		}
		.login-container {
			display: flex;
			margin: 0 auto;
			padding: 100px;
			align-items: center;
			justify-content: center;
			text-align: center;

		}
		.login-box {
			width: 33%;
			padding: 60px;
			margin: 20px;
			background-color: #f2f2f2;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			/* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(3px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);
		}
		.login-box h2 {
			font-size: 30px;
			margin-bottom: 20px;
			color: #FE7C03;
            text-shadow: 2px 2px 4px #000000;
		}
		.login-box label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
			
		}
		.login-box input[type="text"],
		.login-box input[type="password"] {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}
		.login-box button {
			display: block;
			margin: 0 auto;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			text-decoration: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.login-box button:hover {
			background-color: #555;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 12px;
			font-size: 20px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.btn:hover {
			background-color: #22c1c3;
		}
		.logo {
			width: 100px;
			height: 100px;
			background-color: #fff;
			margin-left: 20px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 36px;
			font-weight: bold;
			color: #333;
		}
		header a {
			color: #fff;
			text-decoration: none;
			margin-left: 20px;
            font-weight: bold;
		}
		h2{
			font-size: 40px;
		}
	</style>
</head>
<body>
	<header>
		<div class="logo">
				CR
		</div>
		<nav>
			<a href="home.php">Home</a>
			<a href="#">About Us</a>
			<a href="#">Contact</a>
			<a href="nlogreg.html">Logout</a>
		</nav>
	</header>
	<div class="login-container">
		<div class="login-box">
			<h2>Create Resume</h2>
				<a href="resume.php" class="btn">Create</a>
		</div>
		<div class="login-box">
			<h2>Upload Resume</h2>
			<h1><input type="file" id="resume" name="resume"></h1>
		</div>
		
	</div>
</body>
</html>
	