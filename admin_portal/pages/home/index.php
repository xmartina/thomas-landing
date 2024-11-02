<?php include __DIR__ . '/../../../admin_portal/partials/session.php';?>
<?php include __DIR__ . '/../../../admin_portal/partials/main.php';

?>
<head>

    <?php includeFileWithVariables(__DIR__ . '/../../../admin_portal/partials/title-meta.php', array('title' => $site_name)); ?>
    <?php
    $id = $_SESSION["id"];
    include_once (__DIR__ . '/../../functions/update_pages/home_function.php');
    ?>
    <!-- plugin css -->
    <link href="<?= $admin_url ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <?php include __DIR__ . '/../../../admin_portal/partials/head-css.php'; ?>

</head>


<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include __DIR__ . '/../../../admin_portal/partials/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <?php includeFileWithVariables(__DIR__ . '/../../../admin_portal/partials/page-title.php', array('pagetitle' => 'Home', 'subtitle' =>'Dashboard' , 'title' => $site_name)); ?>


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

        <?php include __DIR__ . '/../../../admin_portal/partials/footer.php'; ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include __DIR__ . '/../../../admin_portal/partials/right-sidebar.php'; ?>

<?php include __DIR__ . '/../../../admin_portal/partials/vendor-scripts.php'; ?>

<!-- apexcharts -->
<script src="<?= $admin_url ?>assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="<?= $admin_url ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= $admin_url ?>assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<script src="<?= $admin_url ?>assets/js/pages/dashboard.init.js"></script>


<script src="<?= $admin_url ?>assets/js/app.js"></script>

</body>

</html>