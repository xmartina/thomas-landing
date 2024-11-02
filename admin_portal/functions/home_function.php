<?php
include_once ( __DIR__ . '/../../admin_portal/functions/main_function.php');

$select_user_sql = "SELECT * FROM users WHERE id = '$id'";
$select_user_result = $conn->query($select_user_sql);

// Check if the query executed successfully and returned a result
if ($select_user_result && $select_user_result->num_rows > 0) {
    // Fetch the associative array of the user data
    $row = $select_user_result->fetch_assoc();

    // Assign user data to variables
    $f_name = $row['fname'];
    $l_name = $row['lname'];
    $useremail = $row['useremail'];
    $username = $row['username'];
    $phone_number = $row['phone_number'];
    $profile_img = $row['profile_img'];
    $token = $row['token'];
    $role = $row['role'];
} else {
    echo "No user found with the specified ID.";
}
