<?php
include_once ( __DIR__ . '/../../admin_portal/functions/main_function.php');
session_start();
$select_user_sql = "SELECT * FROM users WHERE id = '$id' "; // Adjust the table name if different
$select_user_result = $conn->query($select_user_sql);
$row = $select_user_result->fetch_assoc();
$f_name = $row['fname'];