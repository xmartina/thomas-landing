<?php
$page_name = 'Registrar';
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
                    <img src="<?= $site_url ?>assets/school_image/staff/registrar.jpeg" alt="image" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-md-8">
                <div class="content">
                    <p class="text-dark p-4 rounded shadow-lg" >" Stephen Atah Apebende is a Priest of the Catholic Diocese of Ogoja, Nigeria. He holds a Post-Graduate Diploma in Islamology from the Pontifical Institute for Arabic and Islamic Studies, Rome, Italy. He is a well read Philosopher with a Masters Degree in Logic and a Doctorate in Epistemology of Religion from the Pontifical Lateran University, Rome, Italy. He has served both as a Lecturer for many years both at St. Joseph Major Seminary, Ikot Ekpene, Akwa Ibom and Catholic Institute of West Africa, Port Harcourt, Rivers State. As an astute administrator he has been a Vice Rector (Administration) at St. Joseph Ikot Ekpene and is currently the Registrar of Thomas McGettrick Institute of Technology Ogoja, Cross River State. "
                    </p>
                    <div class="flex-three mt-4 flex-column align-items-center name">
                        <span style="font-size: 12px !important;"><?=$page_name?> </span><br><span>Stephen Atah Apebende</span>
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
