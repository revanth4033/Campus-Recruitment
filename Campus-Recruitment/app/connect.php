<?php
    $username = $_POST['username'];
    $presentstudyingyear = $_POST['presentstudyingyear'];
    $dateofbirth = $_POST['dateofbirth'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passingoutyear = $_POST['passingoutyear'];
    $department = $_POST['department'];
    $collegename = $_POST['collegename'];

    //Database connection
    $conn = new mysqli('localhost','root','','student');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(username,presentstudyingyear,dateofbirth,email,password,passingoutyear,department,collegename)values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("siississ",$username,$presentstudyingyear,$dateofbirth,$email,$password,$passingoutyear,$department,$collegename);
        $stmt->execute();
        echo "registration successful..";
        $stmt->close();
        $conn->close();

    }
?>