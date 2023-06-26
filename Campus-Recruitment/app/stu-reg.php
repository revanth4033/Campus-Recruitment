<?php
// Change these variables to match your database credentials
$db_host = 'localhost';  // Database server host
$db_user = 'root';       // Database username
$db_pass = '';           // Database password
$db_name = 'student'; // Database name

// Connect to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form was submitted
if (isset($_POST['submit'])) {

    // Validate the input data
    $errors = array();

    if (empty($_POST['username'])) {
        $errors[] = 'User name is required';
    } else {
        $username = $conn->real_escape_string($_POST['username']);
    }

    if (empty($_POST['presentstudyingyear'])) {
        $errors[] = 'Present studying year is required';
    } else {
        $presentstudyingyear = $conn->real_escape_string($_POST['presentstudyingyear']);
    }

    if (empty($_POST['dateofbirth'])) {
        $errors[] = 'Date of birth is required';
    } else {
        $dateofbirth = $conn->real_escape_string($_POST['dateofbirth']);
    }

    if (empty($_POST['email'])) {
        $errors[] = 'Email is required';
    } else {
        $email = $conn->real_escape_string($_POST['email']);
    }

    if (empty($_POST['password'])) {
        $errors[] = 'Password is required';
    } else {
        $password = $conn->real_escape_string($_POST['password']);
    }

    if (empty($_POST['passingoutyear'])) {
        $errors[] = 'Passing out year is required';
    } else {
        $passingoutyear = $conn->real_escape_string($_POST['passingoutyear']);
    }

    if (empty($_POST['department'])) {
        $errors[] = 'Department is required';
    } else {
        $department = $conn->real_escape_string($_POST['department']);
    }

    if (empty($_POST['collegename'])) {
        $errors[] = 'College name is required';
    } else {
        $collegename = $conn->real_escape_string($_POST['collegename']);
    }

    // If there are no errors, insert the data into the database
    if (empty($errors)) {

        // Create the SQL query
        $sql = "INSERT INTO registration (username, presentstudyingyear, dateofbirth, email, password, passingoutyear, department, collegename) VALUES ('$username', '$presentstudyingyear', '$dateofbirth', '$email', '$password', '$passingoutyear', '$department', '$collegename')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: nlogreg.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // If there are errors, display them
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}

// Close the database connection
$conn->close();
?>
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
		}
		header {
			background-color: #333;
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
	</style>
</head>
<body>
	<header>
		<div class="logo">CR</div>
		<nav>
			<a href="#">Home</a>
			<a href="#">About Us</a>
			<a href="#">Contact</a>
      <a href="#">Logout</a>
		</nav>
	</header>
    <form action="" method="post">
        <center><h1 style="padding-top: 0px">Student Registration Form</h1></center>
        <?php
        if(isset($error)){
          foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
      };

        ?>
        <div class="frm">
                <div class="frm1">
                    <label for="User-name">User Name:</label>
                    <input type="text" id="User-name" name="username" required>
                    
                    <label for="present-studying-year">Present Studying Year:</label>
                    <select id="present-studying-year" name="presentstudyingyear" required>
                    <option value=""></option>
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">Fourth Year</option>
                    </select>
                    
                    <label for="date-of-birth">Date of Birth:</label>
                    <input type="text" id="date-of-birth" name="dateofbirth" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="frm2">
                    
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" required>
                    <label for="passing-out-year">Passing Out Year:</label>
                    <input type="text" id="passing-out-year" name="passingoutyear" required>
                    
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" required>
                    
                    <label for="college-name">College Name:</label>
                    <input type="text" id="college-name" name="collegename" required>
                </div>
        </div>
        <center><input type="submit" name="submit" class="btn"></center>
      </form>
      </script>
</body>
</html>

