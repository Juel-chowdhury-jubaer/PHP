<?php
include 'dbconnect.php';

$db='assignment';
// select database
mysqli_select_db($conn,$db) or die("could not select database". mysqli_error());

// create table
$tab = "CREATE TABLE roomdetail (
id VARCHAR(30),
username VARCHAR(25),
checkin_date DATE,
checkout_date DATE,
room_type TEXT(20),
email VARCHAR(100) NOT NULL PRIMARY KEY,
no_of_room INT,
total_amount DOUBLE,
paid_amount DOUBLE
)";



if (mysqli_multi_query($conn, $tab)) {
    echo "Tables creation successful";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 