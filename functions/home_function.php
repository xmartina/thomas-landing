<?php
include_once (__DIR__ . '/main.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Slider Function
$sql = "SELECT * FROM front_slider"; // Make sure this is correct
$result = $conn->query($sql);

// Check if the query was successful


//department function
//$dep_sql = "SELECT * FROM departments ORDER BY RAND() LIMIT 6";
//$dep_result = $conn->query($dep_sql);

if (!$result) {
    die("Database query failed: " . $conn->error);
}