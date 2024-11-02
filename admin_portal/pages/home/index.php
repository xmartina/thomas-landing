<?php include __DIR__.'/../../partials/session.php'; ?>
<?php include __DIR__.'/../../partials/main.php'; ?>
<head>

    <?php includeFileWithVariables(__DIR__.'/../../partials/title-meta.php', array('title' => 'Cards')); ?>

    <?php include __DIR__.'/../../partials/head-css.php'; ?>


</head>


<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include __DIR__.'/../../partials/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'UI Elements' , 'title' => 'Cards')); ?>


            <div class="container-fluid">

                <div class="page-content-wrapper">

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="<?= $site_url ?>assets/images/small/img-5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-size-16 mt-0">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit
                                        longer.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title font-size-16 mt-0">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit
                                        longer.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                                <img class="card-img-bottom img-fluid" src="<?= $site_url ?>assets/images/small/img-6.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <img class="card-img img-fluid" src="<?= $site_url ?>assets/images/small/img-7.jpg" alt="Card image">
                                <div class="card-img-overlay">
                                    <h4 class="card-title text-white font-size-16 mt-0">Card title</h4>
                                    <p class="card-text text-light">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit
                                        longer.</p>
                                    <p class="card-text">
                                        <small class="text-white">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include __DIR__.'/../../partials/footer.php'; ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include __DIR__.'/../../partials/right-sidebar.php'; ?>



<script src="<?= $admin_url ?>assets/libs/masonry-layout/masonry.pkgd.min.js"></script>

<?php include __DIR__.'/../../partials/vendor-scripts.php'; ?>

<script src="<?= $admin_url ?><?= $admin_url ?>assets/js/app.js"></script>

</body>
</html>
