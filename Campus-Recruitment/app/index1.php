<?php
  // connect to the database
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "student";

  $conn = mysqli_connect($host, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>

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
            background-image: url("10.png");
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
        table, th, td {    
border: 1px solid white;  
margin-left: auto;  
margin-right: auto;  
border-collapse: collapse;    
width: 1000px; 
height: 60px; 
text-align: center; 
font-size: 20px; 
  
}    
th{
    background-color: #333;
    color: white;
    color: #FE7C03;
	text-shadow: 2px 2px 4px #000000;
}
td{
    color: white;
    text-shadow: 2px 2px 4px #000000;
}
tr:hover {
  background-color: #22c1c3;
}
h1{
   
    color: white;

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
    <h1 align = 'center'>Student Details</h1>
		<?php
			$sql = "SELECT * FROM registration";

			// Execute the query and store the result
			$result = $conn->query($sql);
		  
			// Check if any rows were returned
			if ($result->num_rows > 0) {
			  // Start the table
			  echo "<table border='1' align='center'>";
			  echo "<tr><th>Username</th><th>Present Studying Year</th><th>Email</th><th>College Name</th><th>Department</th></tr>";
			  
			  // Loop through each row and output the data in a table row
			  while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["username"] . "</td><td>" . $row["presentstudyingyear"] . "</td><td>" . $row["email"] . "</td><td>" . $row["collegename"] . "</td><td>" . $row["department"] . "</td></tr>";
			  }
			  
			  // End the table
			  echo "</table>";
			} else {
			  echo "0 results";
			}
		  
			// Close the database connection
			$conn->close();
		  ?>
		  
		
	
</body>
</html>
