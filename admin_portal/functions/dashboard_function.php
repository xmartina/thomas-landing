<?php
include_once(__DIR__ . '/../../admin_portal/functions/main_function.php');


$get_new_users_sql = "SELECT * FROM students WHERE is_registered = '0' LIMIT 10";
$get_new_users_result = $portal_conn->query($get_new_users_sql);
