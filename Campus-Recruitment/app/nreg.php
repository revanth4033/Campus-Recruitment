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
$userName = $_POST['User-name'];
$presentStudyingYear = $_POST['present-studying-year'];
$dateOfBirth = $_POST['date-of-birth'];
$email = $_POST['email'];
$password = $_POST['password'];
$passingOutYear = $_POST['passing-out-year'];
$department = $_POST['department'];
$collegeName = $_POST['college-name'];

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO registration (username, presentstudyingyear, dateofbirth, email, password, passingoutyear, department, collegename) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisssiss", $userName, $presentStudyingYear, $dateOfBirth, $email, $password, $passingOutYear, $department, $collegeName);

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
