<?php
$servername = $_ENV["MYSQL_APP_PORT_3306_TCP_ADDR"];
$username = "root";
$password = $_ENV["MYSQL_APP_ENV_MYSQL_ROOT_PASSWORD"];

// Create connection
$conn = new \mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
