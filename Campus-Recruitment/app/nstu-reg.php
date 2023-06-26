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
            background-image: url("3.png");
		}
		header {
			
			color: #fff;
			padding: 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
      text-shadow: 2px 2px 4px #000000;
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
        padding: 60px;
        border-radius: 5px;
        box-shadow: 0px 0px px #888;
        width: 500px;
        margin: 0 auto;
        /* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(3px);
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
      .frm{
        display: flex;
        padding: 20px;
      }
      .frm1{
        padding-right: 10px;
      }
      h1{
        padding-top: 0px;
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
      <a href="nlogreg.html">Logout</a>
		</nav>
	</header>
    <form action="nreg.php" method="post">
        <center><h1>Student Registration Form</h1></center>
        <div class="frm">
                <div class="frm1">
                    <label for="User-name">User Name:</label>
                    <input type="text" id="User-name" name="User-name" required>
                    
                    <label for="present-studying-year">Present Studying Year:</label>
                    <select id="present-studying-year" name="present-studying-year" required>
                    <option value=""></option>
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">Fourth Year</option>
                    </select>
                    
                    <label for="date-of-birth">Date of Birth:</label>
                    <input type="text" id="date-of-birth" name="date-of-birth" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="frm2">
                    
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" required>
                    <label for="passing-out-year">Passing Out Year:</label>
                    <input type="text" id="passing-out-year" name="passing-out-year" required>
                    
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" required>
                    
                    <label for="college-name">College Name:</label>
                    <input type="text" id="college-name" name="college-name" required>
                </div>
        </div>
        <center><input type="submit" name="submit" class="btn" value="Submit"></center>
      </form>
      </script>
</body>
</html>
