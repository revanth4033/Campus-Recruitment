<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
            font-weight: bold;
			background-image: url("2.png");
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
			padding: 30px;
			text-align: center;
			color: white;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 20px;
			font-size: 30px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.btn:hover {
			background-color: #22c1c3
		}
		h1{
			color: #d9f60c;
			text-align: center;
			font-size: 30px;
			font-family: "Bruno Ace SC";
			font-style: italic;
}
h1::first-letter {
  font-size: 200%;
  color: #8A2BE2;
  
}
		
	</style>
</head>

<body>
	<header>
		
		<div class="logo">CR</div>
		<nav>
			<a href="home.php">Home</a>
			<a href="#">About Us</a>
			<a href="#">Contact</a>
			<a href="nlogreg.html">Logout</a>
		</nav>
	</header>
	<h1>Be curious. Use data. <br>Leverage imagination.Be an expert.<br>Be an enthusiast. Be authentic.<br> Know your competition.</h1>
	<h1>Join us today</h1>	
	<div class="main">
		
		
		<a href="stu1.php" class="btn">Student Details</a> 
		<a href="cart.php" class="btn">Company Details</a>
	</div>
</body>
</html>


