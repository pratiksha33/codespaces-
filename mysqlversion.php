<?php

$host_name = "localhost";
$user_name = "lupindemo_diag"; 
$passwd = "Hddjghg232nbhds@12";
$db_name = "lupindemo_diagnostics";
// Replace these with your actual database connection details

// Create connection
$conn = new mysqli($host_name, $user_name, $passwd, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the query to get the MySQL version
$result = $conn->query("SELECT VERSION() as version");
$row = $result->fetch_assoc();

// Output the MySQL version
echo "MySQL version: " . $row["version"];

// Close connection
$conn->close();

?>