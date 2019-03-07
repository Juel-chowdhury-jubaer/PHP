<?php
include 'dbconnect.php';

// Create database
$db = "CREATE DATABASE assignment";


if (mysqli_multi_query($conn,$db)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


mysqli_close($conn);
?> 