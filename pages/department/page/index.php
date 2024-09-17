<?php
include_once (__DIR__ . '/../../../functions/department_function.php');
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
                        <a href="<?=$siteUrl?>pages/department/page/?book_id=<?=$book_id?>"><?=$page_name?></a>
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
