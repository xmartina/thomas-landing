<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Colors')); ?>

        <?php include 'partials/head-css.php'; ?>


    </head>

    
    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

        <?php include 'partials/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'UI Elements' , 'title' => 'Colors')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="color-box bg-primary p-4 rounded">
                                                <h5 class="my-2 text-white">#525ce5</h5>
                                            </div>
                                            <h5 class="mb-0 mt-3 text-primary">Primary</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="color-box bg-success p-4 rounded">
                                                <h5 class="my-2 text-white">#34c38f</h5>
                                            </div>
                                            <h5 class="mb-0 mt-3 text-success">Success</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="color-box bg-info p-4 rounded">
                                                <h5 class="my-2 text-white">#50a5f1</h5>
                                            </div>
                                            <h5 class="mb-0 mt-3 text-info">Info</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="color-box bg-warning p-4 rounded">
                                                <h5 class="my-2 text-white">#f1b44c</h5>
                                            </div>
                                            <h5 class="mb-0 mt-3 text-warning">Warning</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="color-box bg-danger p-4 rounded">
                                                <h5 class="my-2 text-white">#f46a6a</h5>
                                            </div>
                                            <h5 class="mb-0 mt-3 text-danger">Danger</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="color-box bg-dark p-4 rounded">
                                                <h5 class="my-2 text-light">#343a40</h5>
                                            </div>
                                            <h5 class="mb-0 mt-3 text-dark">Dark</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="color-box bg-secondary p-4 rounded">
                                                <h5 class="my-2 text-light">#74788d</h5>
                                            </div>
                                            <h5 class="mb-0 mt-3 text-muted">Secondary</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

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

        <script src="assets/js/app.js"></script>

    </body>
</html>
