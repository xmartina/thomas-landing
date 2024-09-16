<?php
include_once (__DIR__ . '/main.php');

$sql = "SELECT * FROM front_slider"; // Adjust the table name if different
$result = $conn->query($sql);