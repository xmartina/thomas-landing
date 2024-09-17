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

if (isset($_GET['book_id']) && is_numeric($_GET['book_id'])) {
    $book_id = $_GET['book_id'];

    // Database connection (Assuming $conn is your database connection variable)
    include_once (__DIR__ . '/main.php');

    // Prepare and execute the SQL query
    $sql = "SELECT dep_name FROM departments WHERE book_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $book_id); // 'i' denotes 'integer'
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a department was found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $page_name = $row['dep_name'];

        // Use $page_name as needed
        echo "Department Name: " . htmlspecialchars($page_name);
    } else {
        echo "No department found with that ID.";
    }

    $stmt->close();
} else {
    echo "Invalid or missing book_id in URL.";
}
