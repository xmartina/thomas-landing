<?php
include_once (__DIR__ . '/main.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

//General Settings
$sql = "SELECT * FROM departments"; // Adjust the table name if different
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$dep_name = $row["dep_name"];
$dep_title = $row["dep_name"]; // Example if title is same as name
$dep_dec = $row["dep_dec"];
$dep_short_dec = $row["dep_short_dec"];
$dep_img = $row["dep_img"];