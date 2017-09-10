<?php
$servername = "localhost";
$username = "root";
$password = "Asendua12";
$dbname = "project_base";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if(mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else {
    echo "connection successfull......";
}


//mysqli_close($conn);
?>
