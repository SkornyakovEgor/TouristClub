<?php
require_once 'config.php';

$name = trim($_POST['name']);
$pass = trim($_POST['pass']);
$email = trim($_POST['email']);
$birthday = trim($_POST['birthday']);
$sex = trim($_POST['sex']);


/*  $hash = crypt($pass, $key);  */


$hash = password_hash($pass, PASSWORD_DEFAULT);


if ($name =='' OR $pass=='' OR $email=='' OR $birthday=='' OR $sex ==''){
    echo 2;
    die;
}

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT name, email, password FROM users WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo 3;
    die;
}

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, email, password, birthday, sex) VALUES ('".$name."', '".$email."', '".$hash."', '".$birthday."', '".$sex."')";

if ($conn->query($sql)){
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






