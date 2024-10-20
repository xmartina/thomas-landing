<?php
$page_name = 'Registrar';
include_once (__DIR__ . '/../../../functions/staff_function.php');
include_once (__DIR__ . '/../../../partials/header.php');
?>
<main id="main">
    <section class="breadcumb-section relative">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 z-index-2 relative ">
                    <div class="title-inner center">
                        <h1 class="title text-white mb-18"><?=$page_name?></h1>
                        <div class="title-group text-white">
                            <a href="<?=$siteUrl?>">Home</a>
                            <a href="<?=$siteUrl?>pages/staff/<?=$page_name?>"><?=$page_name?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" pd-section">
    <div class="tf-container">
        <div class="row quote-style">
            <div class="col-md-4">
                <div class="image">
                    <img src="<?= $site_url ?>assets/school_image/staff/registrar.jpeg" alt="image">
                </div>
            </div>
            <div class="col-md-8">
                <div class="content">
                    <p class="des">" Every great dream begins with a dreamer. Always remember, you have
                        within you the strength, the patience, and the passion to reach for the stars to
                        change the world. "
                    </p>
                    <div class="flex-three flex-row align-items-center name">
                        <span style="font-size: 12px !important;"><?=$page_name?> </span><br><span>--- Stephen Atah Apebende</span>
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
