<?php
// Database configuration
error_reporting();
// session_start();
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
    
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}



?>