<?php
$page_name = 'Bursar';
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

    <section class=" pd-section pb-3">
        <div class="tf-container">
            <div class="row quote-style">
                <div class="col-md-4">
                    <div class="image">
                        <img src="<?= $site_url ?>assets/school_image/staff/bursar.jpeg" alt="image" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <div class="text-dark p-4 rounded shadow-lg" >
                            <div class="mb-3" style="font-weight: bold;">
                            Sir. Peter Abuo Bisong CPA, ALGA. ASCON.
                            </div>

                            HOLDS A BSC FROM THE PRESTIGIOUS UNIVERSITY OF JOS NIGERIA.

                            SERVED THE STATE AS PROCUREMENT OFFICER, FEDERAL GOVERNMENT AS KEY FIGURE IN THE FINAL ACCOUNT UNIT OF MIN. OF AVIATION AND THE LOCAL GOVERNMENT AS FINANCE ADMINISTRATOR BEFORE RETIREMENT

                            Married with six kids

                            Expertise
                            Professional expertise in health, accounts.
                            Personal development in computer, Agric, family life counseling, publishing, livelihood training and job creation.
                        </div>>
                        </div>
                        <div class="flex-three mt-4 flex-column align-items-center name">
                            <span style="font-size: 12px !important;text-transform: capitalize"><?=$page_name?> </span><br><span>Mr Peter Abuo Bisong</span>
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
