<?php
$user = $_GET['username'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "breakdown";

// Create connection
$connn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connn->connect_error) {
    die("Connection failed: " . $connn->connect_error);
}
if (null !== $username) {
	$sql = "DELETE FROM users WHERE `username` = '$user';";
$res = $connn->query($sql);
if ($res === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connn->error;
}
$connn->close();
header("Location: deleteF.php");
}
?> 
