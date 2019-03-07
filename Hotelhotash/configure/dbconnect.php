<?php
$servername = "localhost";
$username = "root";

// Create connection
$conn = mysqli_connect($servername, $username);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";
?> 