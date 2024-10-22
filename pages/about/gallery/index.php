<?php
$page_name = "Gallery";
include_once(__DIR__ . '/../../../functions/about_function.php');
include_once(__DIR__ . '/../../../partials/header.php');
?>
<main id="main">
    <?php include_once(__DIR__ . '/../../../partials/breadcrumb.php'); ?>
    <section class="blog-single pd-section">
        <div class="container">
            <div class="row">
                <?php get_gallery($gallery_result, $site_url) ?>
            </div>
        </div>
    </section>
</main>
<?php
include_once(__DIR__ . '/../../../partials/footer.php');
?>
