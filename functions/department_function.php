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


// Perform the query to fetch department data
$sql = "SELECT * FROM departments"; // Adjust the table name if different
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Fetch the first row of the result set
    $row = $result->fetch_assoc();

    // Assign department data to variables
    $dep_name = $row["dep_name"];
    $dep_title = $row["dep_name"]; // Example if title is same as name
    $dep_dec = $row["dep_dec"];
    $dep_short_dec = $row["dep_short_dec"];
    $dep_img = $row["dep_img"];
    $book_id = $row["book_id"]; // Ensure 'book_id' is included in your SELECT statement if it's needed for URL generation

    // Set the page name as the department name
    $page_name = $dep_name;

    // Generate a URL with book_id
    $page_url = "page?book_id=" . $book_id;

    // Example output using these variables
    echo '<div class="department">
            <h2>' . htmlspecialchars($page_name) . '</h2>
            <p>' . htmlspecialchars($dep_dec) . '</p>
            <img src="' . htmlspecialchars($dep_img) . '" alt="' . htmlspecialchars($dep_name) . '">
            <a href="' . htmlspecialchars($page_url) . '">Visit Page</a>
            <div>
                <h3>Short Description</h3>
                <p>' . htmlspecialchars($dep_short_dec) . '</p>
            </div>
          </div>';
} else {
    echo "No departments found.";
}

