<?php

$public = "http://localhost:8000";

// Database configuration
$dbHost = 'localhost';
$dbName = 'weer_site';
$dbUser = 'root';
$dbPass = '';

// Attempt database connection using PDO
try {
    $dsn = "mysql:host=$dbHost;dbname=$dbName";
    $conn = new PDO($dsn, $dbUser, $dbPass);
    
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    // Output error message
    echo "Connection failed: " . $e->getMessage();
}