<?php
$conn = new mysqli("localhost", "root", "", "website_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $username = $conn->real_escape_string($_POST['username']);

    $sql = "INSERT INTO users (email, password, username) 
            VALUES ('$email', '$password' '$username)";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";}
    }

$conn->close();
?>