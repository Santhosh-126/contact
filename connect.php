<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['number'];
  $message = $_POST['textarea'];


// Create a connection
$conn = new mysqli('localhost','root','','test');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else{
    $stmt = $conn->prepare ("insert into contact(name,email,number,textarea) values(?,?,?,?)")

    $stmt->bind_param("ssis",$name ,$email,$number,$message);
    $stmt->execute();
    echo "message sent";
    $stmt->close();
    $conn->close();
}