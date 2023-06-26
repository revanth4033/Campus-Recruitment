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

  // Get form data
  $userName = $_POST['first-name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpwd = $_POST['cpwd'];

  // Check if password matches confirm password
  if ($password !== $cpwd) {
    die("Error: Password and Confirm Password do not match");
  }

  // Prepare and bind statement
  $stmt = $conn->prepare("INSERT INTO facreg (username, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $userName, $email, $password);

  // Execute statement
  if ($stmt->execute() === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();
?>
