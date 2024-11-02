<?php
include_once(__DIR__ . '/../../../admin_portal/functions/main_function.php');

$select_user_sql = "SELECT * FROM front_slider ";
$select_user_result = $conn->query($select_user_sql);