<?php
// Database configuration
error_reporting(0);
session_start();
$dsn= 'mysql:host=localhost;dbname=db_bamwa';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_EMULATE_PREPARES => false, 
];

// Attempt to connect to database
try {
    $pdo = new PDO($dsn, $username, $password, $options);
    // echo 'Connection Connected ';
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}



?>