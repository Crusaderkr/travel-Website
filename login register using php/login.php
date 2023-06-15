<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["login-email"];
  $password = $_POST["login-password"];

  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "Login successful!";
  } else {
    echo "Invalid email or password.";
  }
}

$conn->close();
?>
