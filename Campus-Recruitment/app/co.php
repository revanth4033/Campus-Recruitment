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
		body {
   background: linear-gradient(to bottom, #000000, #191919);
  }

  .container {
   display: flex;
   justify-content: space-between;
   align-items: center;
   margin: 50px;
   background: rgba(255, 255, 255, 0.2);
   padding: 50px;
   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
   backdrop-filter: blur(10px);
   border-radius: 10px;
  }

  .form-container {
   width: 40%;
  }

  form {
   display: flex;
   flex-direction: column;
   align-items: flex-start;
   background: rgba(255, 255, 255, 0.8);
   padding: 20px;
   border-radius: 10px;
   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
  }

  input[type="text"], input[type="email"], textarea {
   margin-bottom: 10px;
   padding: 10px;
   border: none;
   border-radius: 5px;
   width: 100%;
   background-color: rgba(255, 255, 255, 0.6);
   color: #333;
   font-size: 16px;
   font-weight: bold;
  }

  input[type="submit"] {
   background-color: #4CAF50;
   color: white;
   padding: 10px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   width: 100%;
   margin-top: 10px;
   font-size: 16px;
   font-weight: bold;
  }

  .right-container {
   width: 40%;
   display: flex;
   flex-direction: column;
   align-items: center;
  }

  .phone-symbol {
   font-size: 50px;
   margin-bottom: 20px;
   color: #fff;
  }

  .linkedin-profile {
   margin-top: 20px;
   background-color: #0077b5;
   color: #fff;
   padding: 10px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   font-size: 16px;
   font-weight: bold;
   text-decoration: none;
   text-align: center;
  }

  .linkedin-profile:hover {
   background-color: #004471;
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
			<a href="#">Logout</a>
		</nav>
	</header>
	
	<div class="container">
  <div class="form-container">
   <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="suggestions">Suggestions:</label>
    <textarea id="suggestions" name="suggestions" rows="5" required></textarea>

    <input type="submit" value="Submit">
   </form>
  </div>

  <div class="right-container">
  <img src="ph.png" alt="phone" width=110 height=80>
  <div class="phone-symbol">
  <i class="fas fa-phone"></i>
   <span>+91 8456215748</span>
  </div>
  <a href="https://www.linkedin.com/in/deepthi-gangu-a1442721a/" target="_blank" class="linkedin-profile">
   <i class="fab fa-linkedin"></i> LinkedIn Profile
  </a>
 </div>
</div>
</body>
</html>
