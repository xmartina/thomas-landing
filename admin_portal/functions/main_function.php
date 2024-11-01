<?php
include_once ( __DIR__ . '/../include/config.php');
//General Settings
$sql = "SELECT * FROM general_settings"; // Adjust the table name if different
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$site_name = $row["site_name"];
$site_title = $row["site_title"];
$site_dec = $row["site_dec"];
$siteUrl = $row["site_url"];
$site_phone = $row["site_phone"];
$site_email = $row["site_email"];
$site_address = $row["site_address"];
$logo = $row["logo"];
$footer_logo = $row["footer_logo"];
$favicon = $row["favicon"];
$footer_dec = $row["footer_dec"];
$footer_copyright = $row["footer_copyright"];
$site_url = $siteUrl;
$admin_url = $site_url . 'admin_portal/';