<?php
// Database configuration
$host = 'localhost';
$dbname = 'db_noun2';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Handle any errors
    echo 'Connection failed: ' . $e->getMessage();
}


// Close the database connection (optional in modern PHP versions)
// $pdo = null;