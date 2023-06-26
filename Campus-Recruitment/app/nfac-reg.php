<!DOCTYPE html>
<html>
<head>
	<title>Campus Recruitment</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
            font-weight: bold;
			background-image: url("9.png");
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
        body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      
      form {
        background-color: #fff;
        padding: 82px;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #888;
        width: 500px;
        margin: 0 auto;
		/* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);
      }
      
      input[type=text], input[type=email], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      
      input[type=submit] {
        background-color: #4CAF50;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: #45a049;
      }
	  h1{
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
			<a href="#">About Us</a>
			<a href="#">Contact</a>
			<a href="nlogreg.php">Logout</a>
		</nav>
	</header>
        <form action="admin-reg.php" method="POST">
          <h1>Admin Registration Form</h1>
          <label for="first-name">User Name:</label>
          <input type="text" id="first-name" name="first-name" required>
          
    	  <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          
          <label for="Password">Password:</label>
          <input type="text" id="password" name="password" required>
          
          <label for="conformation">Confirm Password:</label>
          <input type="text" id="cpwd" name="cpwd" required>
          
          <center><input type="submit" name="submit" class="btn" value="Submit"></center>
        </form>
</body>
</html>
