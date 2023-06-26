<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
            font-weight: bold;
			background-image: url("5.png");
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
			padding: 180px;
			text-align: center;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.btn:hover {
			background-color: #555;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 30px auto;
			margin-left: 30px;
			padding: 20px;
			background-color: #f5f5f5;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			max-width: 900px;
			width: 90%;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			/* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(3px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);
		}
		
		h1 {
			margin-top: 0;
			color: #22c1c3;
			text-shadow: 2px 2px 4px #000000;
		}
		
		.row {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			margin-bottom: 20px;
			width: 100%;
			box-sizing: border-box;
		}
		
		.row label {
			flex-basis: 100%;
			margin-bottom: 10px;
			color: #22c1c3;
			text-shadow: 2px 2px 4px #000000;
		}
		
		.row input[type="text"],
		.row input[type="email"],
		.row textarea {
			flex-basis: calc(50% - 10px);
			padding: 10px;
			margin-right: 20px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
		}
		
		.row textarea {
			flex-basis: 100%;
			height: 150px;
		}
		
		.row input[type="file"] {
			flex-basis: calc(50% - 10px);
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
		}
		
		.row button[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			line-height: 1.5;
		}
		
		.row button[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 15px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.btn:hover {
			background-color: #555;
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
	<form action="resume-upload.php" method="POST">
		<h1>Resume Builder</h1>
		<div class="row">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div class="row">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="contact">Contact:</label>
			<input type="text" id="contact" name="contact">
		</div>
		<div class="row">
			<label for="address">Address:</label>
			<textarea id="address" name="address"></textarea>
		</div>
		<div class="row">
			<label for="education">Education:</label>
			<textarea id="education" name="education"></textarea>
		</div>
		<div class="row">
			<label for="certifications">Certifications:</label>
			<input type="file" id="certifications" name="certifications">
		</div>
		<div class="row">
			<label for="skills">Skills:</label>
			<textarea id="skills" name="skills"></textarea>
		</div>
			<div class="row">
			<label for="experience">Experience:</label>
			<textarea id="experience" name="experience"></textarea>
		</div>
		<div class="row">
		<input type="submit" name="submit" class="btn" value="Submit">
		</div>
	</form>
	
</body>
</html>


