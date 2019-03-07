<?php
include 'dbconnect.php';

$db='oopreg';
// select database
mysqli_select_db($conn,$db) or die("could not select database". mysqli_error());

// create table
$tab = "CREATE TABLE users (
id VARCHAR(30) NOT NULL PRIMARY KEY,

username VARCHAR(30),
password VARCHAR(32),
name VARCHAR(50),
email VARCHAR(255),
website VARCHAR(255)
)";




if (mysqli_multi_query($conn, $tab)) {
    echo "Tables creation successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 