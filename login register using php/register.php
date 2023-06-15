<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
// session_start();
// Create connection
// $conn = mysqli_connect($servername, $username, $password);
$conn =mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["register-name"];
  $address = $_POST["register-address"];
  $email = $_POST["register-email"];
  $age = $_POST["register-age"];

  $sql = "INSERT INTO user (name, address, email, age) VALUES ('$name', '$address', '$email', '$age')";

  if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
