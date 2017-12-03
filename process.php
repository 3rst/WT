<?php
session_start();
$name = $_POST["Name"];
$EMAIL = $_POST["Email"];
$Pass=$_POST["password"];
$cp=$_POST["cpassword"];
$link = mysqli_connect("localhost", "root", "","mydb");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($Pass==$cp){
$sql="INSERT INTO harry(Name,Username,Password)
VALUES ('$name','$EMAIL','$Pass')";
if (mysqli_query($link, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
}
else{
    echo "Please enter same password";
    echo '<a href="signup.php">Go Back</a>';
}
if(mysqli_affected_rows($link) > 0){
	echo "<p>User Registered</p>";
	echo '<a href="Login.html">Go Back</a>';
} else {
	echo "Unable to register<br />";
	echo mysqli_error ($link);
}

?>