<?php
require_once 'config.php';

$email= trim($_POST['email']);
$name= trim($_POST['name']);
$pass= trim($_POST['pass']);
$birthday= trim($_POST['birthday']);
$sex= trim($_POST['sex']);
$nickname= trim($_POST['nickname']);

$hash = password_hash($pass, PASSWORD_DEFAULT);

if ($email ==''){
    echo 2;
    die;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($email =='' OR $pass=='' OR $name=='' OR $birthday=='' OR $sex==''){
    echo 2;
    die;
}
$sql = "SELECT name, email, password FROM users WHERE nickname='$nickname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo 3;
    die;
}


$sql = "UPDATE users SET name='".$name."', nickname='".$nickname."', password='".$hash."', birthday='".$birthday."', sex='".$sex."' WHERE email='".$email."'";

if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>