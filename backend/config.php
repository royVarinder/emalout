<?php 


$servername = "localhost";
$database = "emalout_v2";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "<p style='color:green'>Data Connection Successfully</p>";
// mysqli_close($conn);
    
?>