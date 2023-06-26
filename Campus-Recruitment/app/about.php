<!DOCTYPE html>
<html>
<head>
	<title>About Page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
            font-weight: bold;
			background-image: url("b.png");
			background-repeat: no-repeat;
			background-position: center center;
			background-size: cover;

		
		}
		header {
			
			color: blue;
			padding: 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		header a {
			color: white;
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
		
		
		.team-members {
	display: flex;
	justify-content: space-between;
	align-items: center;
	flex-wrap: wrap;
	margin-top: 50px;
}

.team-member {
	flex: 1 1 30%;
	margin: 0 10px;
	background-color: #fff;
	padding: 20px;
	border: 1px solid #ccc;
	text-align: center;
}

.team-member img {
	width: 100%;
	max-width: 200px;
	border-radius: 50%;
	margin-bottom: 20px;
}

.team-member h2 {
	font-size: 1.5rem;
	margin-bottom: 10px;
}

.team-member p {
	font-size: 1.2rem;
	margin-bottom: 20px;
}

.team-member .bio {
	display: none;
}

.team-member:hover .bio {
	display: block;
}
.student {
  display: inline-block;
  width: 30%;
  text-align: center;
  vertical-align: top;
  margin: 1%;
}

.student img {
  
  margin-bottom: 10px;
}

.student h2 {
  font-size: 24px;
  margin: 0;
  color: white;
  text-shadow: 2px 2px 4px #000000;
}

.student p {
  font-size: 18px;
  margin: 10px 0;

}
h1,p{
    color: white;
    text-shadow: 2px 2px 4px #000000;
}
h1{
    color: orange;
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
			<a href="#">Contact</a>
			
		</nav>
	</header>
    <center><h1>Meet the Team</h1></center>
    <center><h1>MVGR College Of Engineering</h1></center>
	<main>
    <section class="student">
  <img src="sriram.jpg" alt="Sriram Balaka" width="200" height="200">
  <h2>Sriram Balaka</h2>
  <p>Information Technology</p>
  <p>Skills: HTML, CSS, JavaScript, Python</p>
  
  <p>"Working on this project has been an amazing experience. I've learned so much about web development and have had the opportunity to collaborate with some really talented people."</p>
</section>

<section class="student">
  <img src="deepthi.jpg" alt="Deepthi Gangu" width="290" height="200">
  <h2>Deepthi Gangu</h2>
  <p>Information Technology</p>
  <p>Skills: HTML, CSS, JavaScript, Python</p>
  <p>"Designed and developed a website using HTML, CSS, and PHP. Collaborated with team members to implement dynamic features and optimize website performance."</p>
</section>

<section class="student">
  <img src="me.jpg" alt="Revanth Banisetti" width="200" height="200">
  <h2>Revanth Banisetti</h2>
  <p>Information Technology</p>
  <p>Skills: HTML, CSS, JavaScript, Python</p>
  <p> "I've really enjoyed working on this project and being able to collaborate with such a talented team. It's been a great opportunity to learn about web development."</p>
</section>

	</main>
    <footer>
        <p>&copy; 2023 Our Project. All rights reserved.</p>
</footer>

</body>
</html>
