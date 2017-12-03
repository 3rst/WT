<?php

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE harry (
Name VARCHAR(10), 
Username VARCHAR(30),
Password VARCHAR(30),

)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>