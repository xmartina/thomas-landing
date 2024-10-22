<?php
$page_name = "Gallery";
include_once (__DIR__ . '/../../../functions/about_function.php');
include_once (__DIR__ . '/../../../partials/header.php');
?>
    <main id="main">
        <?php include_once (__DIR__ . '/../../../partials/breadcrumb.php'); ?>

        <div class="row">
            <?php get_gallery($gallery_result, $img_name, $site_url, $img_title) ?>
        </div>
    </main>
<?php
include_once (__DIR__ . '/../../../partials/footer.php');
?>
