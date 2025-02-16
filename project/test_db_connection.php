<?php
// Include the database connection file
include 'assets/includes/db_connect.php';

// Perform a simple query to test the connection
$sql = "SELECT DATABASE()";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo "Connected successfully to the database: " . $row['DATABASE()'];
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>