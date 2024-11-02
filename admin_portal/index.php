<?php include __DIR__ . '/../admin_portal/partials/session.php';?>
<?php include __DIR__ . '/../admin_portal/partials/main.php';
$id = $_SESSION["id"];
?>
<?php include_once (__DIR__ . '/../admin_portal/functions/home_function.php'); ?>
<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => $site_name)); ?>

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <?php include 'partials/head-css.php'; ?>

</head>


<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'partials/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Home', 'subtitle' =>'Dashboard' , 'title' => $site_name)); ?>


            <div class="container-fluid">

                <div class="page-content-wrapper">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Newly Registered Students</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Product</th>

                                                <th>Customer</th>
                                                <th>Price</th>
                                                <th>Invoice</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>#2356</td>
                                                <td><img src="assets/images/product/img-7.png" width="42" class="me-3" alt="">Green Chair</td>
                                                <td>Kenneth Gittens</td>
                                                <td>$200.00</td>
                                                <td>42</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2564</td>
                                                <td><img src="assets/images/product/img-8.png" width="42" class="me-3" alt="">Office Chair</td>
                                                <td>Alfred Gordon</td>
                                                <td>$242.00</td>
                                                <td>54</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td>#2125</td>
                                                <td><img src="assets/images/product/img-10.png" width="42" class="me-3" alt="">Gray Chair</td>
                                                <td>Keena Reyes</td>
                                                <td>$320.00</td>
                                                <td>65</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#8587</td>
                                                <td><img src="assets/images/product/img-11.png" width="42" class="me-3" alt="">Steel Chair</td>
                                                <td>Timothy Zuniga</td>
                                                <td>$342.00</td>
                                                <td>52</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2354</td>
                                                <td><img src="assets/images/product/img-12.png" width="42" class="me-3" alt="">Home Chair</td>
                                                <td>Joann Wiliams</td>
                                                <td>$320.00</td>
                                                <td>25</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'partials/footer.php'; ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'partials/right-sidebar.php'; ?>

<?php include 'partials/vendor-scripts.php'; ?>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>


<script src="assets/js/app.js"></script>

</body>

</html>