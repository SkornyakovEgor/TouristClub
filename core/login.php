<?php
require_once 'config.php';

$email= trim($_POST['email']);
$pass = trim($_POST['pass']);

if ($email =='' OR $pass==''){
    echo 2;
    die;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, email, password FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    if(password_verify($pass,$row["password"])){
        echo json_encode(["name" => $row["name"], "email"=>$row['email']]);
    }

} else {
    echo "0";
}
$conn->close();
?>

