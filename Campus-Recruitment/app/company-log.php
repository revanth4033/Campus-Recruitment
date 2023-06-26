<?php
  // connect to the database
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "student";

  $conn = mysqli_connect($host, $username, $password, $database);

  // check if connection was successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // check if form was submitted

    // get the username and password from the form
    $username = $_POST["company-username"];
    $password = $_POST["company-password"];

    // prepare the SQL query to check if user exists in the admin table
    $sql = "SELECT * FROM compreg WHERE username = '$username' AND password = '$password'";

    // execute the SQL query
    $result = mysqli_query($conn, $sql);
    

    // check if the query returned any results
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION["username"] = $username;
      // user exists in the admin table, so redirect to the admin dashboard
      header("Location: company.php");
      exit();
    } else {
      // user does not exist in the admin table, so show an error message
      echo "Invalid username or password.";
    }
  

  // close the database connection
  mysqli_close($conn);
?>