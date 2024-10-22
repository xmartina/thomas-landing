<?php
$page_name = "Vision and Mission";
include_once (__DIR__ . '/../../../functions/about_function.php');
include_once (__DIR__ . '/../../../partials/header.php');
?>
<main id="main">
    <?php include_once (__DIR__ . '/../../../partials/breadcrumb.php'); ?>

    <section class=" pd-section pb-3">
        <div class="tf-container">
            <div class="row quote-style">
                <div class="col-md-4">
                    <div class="image">
                        <img src="<?= $site_url ?>assets/school_image/staff/rector.jpeg" alt="image" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <p class="text-dark p-4 rounded shadow-lg" >" Dr. Francis Mowang Ganyi is a Nigerian by birth, a Christian of Roman Catholic extraction and a socialite with strong moral values. A retired University teacher and researcher, he is a reputable Google scholar with several publications to his credit. He has a deep interest in cultural studies with a bent for African knowledge systems and values. Married to Barr. Mrs Bridget M. Ganyi, they are blessed with children. Dr. Ganyi also displays strong interpersonal relationships and leadership drive and is a powerful public speaker. "
                        </p>
                        <div class="flex-three mt-4 flex-column align-items-center name">
                            <span style="font-size: 12px !important;text-transform: capitalize"><?=$page_name?> </span><br><span>Dr Francis Mowing Ganyi</span>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </section>
</main>
<?php
include_once (__DIR__ . '/../../../partials/footer.php');
?>
