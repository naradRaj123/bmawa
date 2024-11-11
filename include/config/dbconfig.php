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

$api_key = 'rzp_test_6m5EFshHcmM2o1'; 
$api_secret = 'HxglzG5XHEPtZOP6e9eulqQv'; 

// Attempt to connect to database
try {
    $pdo = new PDO($dsn, $username, $password, $options);
    
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>