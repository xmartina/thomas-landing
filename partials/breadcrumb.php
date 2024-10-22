<?php
$currentUrl = $_SERVER['REQUEST_URI'];

// Check if the current request URL contains 'about'
if (strpos($currentUrl, 'about') !== false) {
    $parts = explode('/', trim($currentUrl, '/')); // trim removes trailing slash
    $lastPart = end($parts);  // Get the last element of the array
    $breadcrumb_link = $lastPart;  // Return the current URL if 'about' is found
} elseif(strpos($currentUrl, 'staff') !== false) {
    $breadcrumb_link = $page_name;
}
?>

<section class="breadcumb-section relative">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12 z-index-2 relative ">
                <div class="title-inner center">
                    <h1 class="title text-white mb-18"><?=$page_name?></h1>
                    <div class="title-group text-white">
                        <a href="<?=$siteUrl?>">Home</a>
                        <a href="<?=$siteUrl?>pages/staff/<?=$breadcrumb_link?>"><?=$page_name?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>