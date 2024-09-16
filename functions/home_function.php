<?php
include_once (__DIR__ . '/main.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Your database connection and query execution code
$sql = "SELECT * FROM front_slider"; // Make sure this is correct
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Database query failed: " . $conn->error);
}
