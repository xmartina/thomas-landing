<?php
$page_name = 'Bursar';
include_once (__DIR__ . '/../../../functions/staff_function.php');
include_once (__DIR__ . '/../../../partials/header.php');
?>
<main id="main">
    <?php include_once (__DIR__ . '/../../../partials/breadcrumb.php'); ?>

    <section class=" pd-section pb-3">
        <div class="tf-container">
            <div class="row quote-style">
                <div class="col-md-4">
                    <div class="image">
                        <img src="<?= $site_url ?>assets/school_image/staff/bursar.jpeg" alt="image" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content p-5">
                        <div class="text-dark p-4 rounded shadow-lg" >
                            <div class="mb-2" style="font-weight: bold;">
                            Sir. Peter Abuo Bisong CPA, ALGA. ASCON.
                            </div>
                            <div class="mb-2">
                                Holds a bsc from the prestigious university of Jos Nigeria.
                            </div>
                            <div class="mb-2">
                                Served the state as procurement officer, federal government as key figure in the final account unit of min. of aviation and the local government as finance administrator before
                            </div>
                            <div class="mb-2">
                            Married with six kids
                            </div>
                            <div class="mb-2">
                            Expertise
                            Professional expertise in health, accounts.
                            Personal development in computer, Agric, family life counseling, publishing, livelihood training and job creation.
                            </div>
                        </div>
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
