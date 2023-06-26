<?php
// connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input from form
$username = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$education = $_POST['education'];
$skills = $_POST['skills'];
$experience = $_POST['experience'];
$certifications = $_POST['certifications'];

// Check if certifications were uploaded
// Check if certifications were uploaded
if (isset($_FILES['certifications'])) {
    $certifications = $_FILES['certifications'];
    $certifications_path = "certifications/";
    $certifications_file = $certifications_path . basename($certifications["name"]);
    $upload_result = move_uploaded_file($certifications["tmp_name"], $certifications_file);
    var_dump($certifications_file);
    if ($upload_result) {
        echo "Certifications uploaded successfully. File path: " . $certifications_file . "<br>";
    } else {
        echo "Error uploading certifications. Error code: " . $_FILES['certifications']['error'] . "<br>";
    }
} else {
    $certifications_file = ''; // set to empty string
}


// Insert user data into database


  
  // Prepare statement
  $stmt = mysqli_prepare($conn, "INSERT INTO resume (username, email, contact, address, education, certifications, skills, experience) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  
  // Bind parameters
  mysqli_stmt_bind_param($stmt, 'ssssssss', $username, $email, $contact, $address, $education, $certifications_file, $skills, $experience);
  
  // Execute statement
  if (mysqli_stmt_execute($stmt)) {
    echo "User details stored successfully!";
  } else {
    echo "Error inserting data into database. Error message: " . mysqli_error($conn);
  }
  
  // Close statement
  mysqli_stmt_close($stmt);

?>
