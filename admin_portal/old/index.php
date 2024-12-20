<?php include __DIR__ . '/../admin_portal/partials/session.php';?>
<?php include __DIR__ . '/../admin_portal/partials/main.php';

?>
<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => $site_name)); ?>
    <?php
    $id = $_SESSION["id"];
    include_once (__DIR__ . '/../admin_portal/functions/home_function.php');
    ?>
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
                                                <th>Student Name</th>

                                                <th>Gender</th>
                                                <th>State</th>
                                                <th>Last Class</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            while ($row = $get_new_users_result->fetch_assoc())
                                            {
                                                $first_name = $row['firstname'];
                                                $last_name = $row['lastname'];
                                                $gender = $row['gender'];
                                                $state = $row['state'];
                                                $last_class_passed = $row['last_class_passed'];
                                                $passport = $row['passport'];
                                                $reg_number = $row['reg_number'];

                                                $full_name = $first_name.' '.$last_name;

                                                ?>
                                            <tr>
                                                <td><?=$reg_number?></td>
                                                <td><img src="https://portal.tmit.com.ng/<?=$passport?>" width="42" class="me-3" alt=""><?=$full_name?></td>
                                                <td><?=$gender?></td>
                                                <td><?=$state?></td>
                                                <td><?=$last_class_passed?></td>
                                                <td><span onclick="location.href='https://portal.tmit.com.ng/resources/view/modules.php?view_students'"
                                                        class="btn badge badge-pill badge-soft-primary font-size-13">Edit Student</span>
                                                </td>
                                            </tr>
                                            <?php } ?>
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