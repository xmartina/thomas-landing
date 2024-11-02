<?php
include_once(__DIR__ . '/../../admin_portal/functions/main_function.php');

$select_user_sql = "SELECT * FROM users WHERE id = '$id'";
$select_user_result = $conn->query($select_user_sql);

if ($select_user_result && $select_user_result->num_rows > 0) {
    $row = $select_user_result->fetch_assoc();

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
$full_name = $f_name . ' ' . $l_name;
if ($role = 1) {
    $user_role = 'Super Administrator';
} elseif ($role = 2) {
    $user_role = 'Administrator';
} elseif ($role = 3) {
    $user_role = 'Moderator';
}


$get_new_users_sql = "SELECT * FROM users";
$get_new_users_result = $conn->query($get_new_users_sql);