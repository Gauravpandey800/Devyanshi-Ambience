<?php
// filepath: /opt/lampp/htdocs/project/assets/includes/db_connect.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interior_design";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>