<?php
$page_name = "History";
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
                            The Birth Of <?=$site_name?> Ogoja
                        </h3>
                        <p class="description mb-40">
                            Education through the school system has been the bedrock and tool through which the Catholic Church has carried out her evangelizing mission since her arrival in the Ogoja region in May 1921. Several Nursery, Primary, and Secondary schools have been established over the years.
                        </p>
                        <p class="description mb-40">
                            As part of the events to mark the Centenary Year of the arrival of the Catholic Faith in the Old Ogoja Region in May 2021, the Bishop of Ogoja, Most Rev. Donatus Edet Akpan took this educational stride a notch higher by founding the Thomas McGettrick Institute of Technology, Ogoja. This well conceived idea of our dear Bishop was meant not just to be an institution of theoretical information dissemination and conceptual knowledge transfer but a fertile ground for rigorous training and transformation of the thousands of graduands from the myriads of Secondary Schools in Northern Cross River State into highly skilled, adequately qualified, well motivated, and self-employable young adults.
                        </p>
                        <p class="description mb-40">
                            Being a realist that he is and not desirous of building castles in the sky, the Bishop and Proprietor of this Institute set out to focus on the training of the basic middle cadre skill workers in the areas of health care, Engineering Technology, Skilled Artisans, as well as Management & Financial Studies. The School, which through the Bishop’s Power of Attorney currently occupies over 15 hectares of land which were formally allotted to the now defunct TTC Ogoja, has so far secured the approval of the Cross River State Government to operate, has been duly registered with the Corporate Affairs Commission as a legal entity in law limited by guarantee.
                        </p>
                        <p class="description mb-40">
                            It has successfully scaled through three out of the four mandatory stages for approval by the National Board for Technical Education (NBTE) as a Polytechnic in Nigeria. It is currently awaiting the final Resource Visit by the NBTE for the accreditation of 11 take-off programmes. These are: Electrical/Electronics Engineering, Computer Engineering Technology, Computer Science, Statistics, Nursing Sciences, Health Information Management, Medical Laboratory Technology, Community Health, Pharmaceutical Technology, Accountancy, Business Administration and Public Administration. Upon accreditation, the Institute shall have the authority and capacity to award the National Diploma, and subsequently the Higher National Diploma to her grandaunts.

                        </p>
                        <div class="tag-share-blog pb-50 mb-80 bb-blog">
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
                <div class="col-lg-4 col-12">
                    <div class="sidebar-blog">
                        <div class="widget mb-50">
                            <h4 class="title-blog bb-blog mb-30">Departments</h4>
                            <ul class="category-blog">
                                <?php list_all_department($dep_result) ?>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="widget-banner relative">
                                <div class="z-index-2 relative">
                                    <h2 class="title-banner text-white fw-300">Join the Thomas McGettrick Institute of Technology
                                        <span class="agency fw-600">for Your Future in Technology</span>
                                    </h2>
                                    <p class="des text-white font-man">Take the next step in your education and explore innovative programs in IT, Engineering, and more.</p>
                                    <div class="btn-wrap">
                                        <a href="/admissions" class="more-link">Learn More <i class="icon-right-icon"></i></a>
                                    </div>
                                </div>
                            </div>
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
