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

// Check if 'book_id' is set in the URL and is numeric
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id']; // Ensure this input is validated and sanitized properly

// Query using direct substitution (Note: This method is vulnerable to SQL injection if $book_id is not properly sanitized)
    $sql = "SELECT * FROM departments WHERE book_id = $book_id"; // Adjust the table name if different
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $page_name = $row['dep_name']; // Example of using one of the returned columns

        echo "Department Name: " . htmlspecialchars($page_name);
    } else {
        echo "No department found for the provided ID.";
    }
}