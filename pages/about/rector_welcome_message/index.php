<?php
$page_name = "Rector's Welcome Note";
include_once (__DIR__ . '/../../../functions/about_function.php');
include_once (__DIR__ . '/../../../partials/header.php');
?>
<main id="main">
    <?php include_once (__DIR__ . '/../../../partials/breadcrumb.php'); ?>

    <section class="blog-single pd-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <article class="side-blog-single mb-50 relative">
                        <h3 class="entry-title mb-18">
                            <?=$page_name?>
                        </h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="<?=$site_url?>assets/school_image/staff/rector.jpeg" alt="image">
                            </div>
                            <div class="col-lg-9">
                                <div class="widget rounded p-5">
                                    <div class="widget-banner relative">
                                        <p class="description mb-40">
                                            As Rector of Thomas McCGetrick lnstitute of Technology Ogoja, l welcome all those who visit this website for information and other purposes concerning the lnstitute which prides by the mantra "Outstandingly Different." You are sure to find the difference in Thomas McCGetrick lnstitute of Technology. Feel at home with us.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tag-share-blog mt-50 pb-50 mb-80 bb-blog">
                            <div class="tag-blog-widget flex-three">
                                <span class="tag-share">Tags</span>
                                <ul class="tag-blog">
                                    <li>
                                        <a href="#" class="font-man active">TMIT</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-man">History</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-man">About</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="share-blog-widget flex-three">
                                <span class="tag-share">Share</span>
                                <ul class="social-share flex-six">
                                    <li>
                                        <a href="#" class="flex-five"><i class="icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex-five"><i class="icon-twiter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex-five"><i class="icon-ins"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex-five"><i class="icon-instagram"></i></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </article>
                </div>
                <?php include_once (__DIR__ . '/../../../partials/side_bar.php');  ?>
            </div>
        </div>
    </section>

</main>
<?php
include_once (__DIR__ . '/../../../partials/footer.php');
?>

