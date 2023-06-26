<!DOCTYPE html>
<html>
<head>
	<title>Campus Recruitment Home Page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
            font-weight: bold;
			background-image: url("1.png");
			background-repeat: no-repeat;
			background-position: center center;
			background-size: cover;

		
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
            font-weight: bold;
			font-size: 20px;
		}
		header a:hover {
			text-decoration: underline;
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
		.main {
			padding: 120px;
			text-align: center;
			color: white;
			font-weight: 900;
			font-size: 20px;
			text-shadow: 2px 
			-webkit-text-stroke: 1px black;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 20px;
			font-size: 20px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.btn:hover {
			background-color: #22c1c3;
		}
		h1,h2{
			color: #FE7C03;
			text-shadow: 2px 2px 4px #000000;
		}
		

	</style>
</head>

<body>
	<header>
		
		<div class="logo">CR</div>
		<nav>
			<a href="home.php">Home</a>
			<a href="about.php">About Us</a>
			<a href="co.php">Contact</a>
			
		</nav>
	</header>
	
	<div class="main">
	
		<h1>WELCOME TO CAMPUS RECRUITMENT</h1>
		<h2>Find your dream job here</h2>
		
		<a href="nlogreg.html" class="btn">Login</a>
		<a href="nlogreg.html" class="btn">Sign up</a>
		
	</div>
</body>
</html>
