<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'FontAwesome5')); ?>

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Icons' , 'title' => 'FontAwesome5')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Solid</h4>
                                            <p class="card-title-desc mb-2">Use <code>&lt;i class="fas fa-ad"&gt;&lt;/i&gt;</code> <span class="badge bg-success">v 5.13.0</span>.</p>
                                            <div class="row icon-demo-content" id="solid">
                                            </div>
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Regular</h4>
                                            <p class="card-title-desc mb-2">Use <code>&lt;i class="far fa-address-book"&gt;&lt;/i&gt;</code> <span class="badge bg-success">v 5.13.0</span>.</p>
                                            <div class="row icon-demo-content" id="regular">
                                            </div>
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Brands</h4>
                                            <p class="card-title-desc mb-2">Use <code>&lt;i class="fab fa-500px"&gt;&lt;/i&gt;</code> <span class="badge bg-success">v 5.13.0</span>.</p>
                                            <div class="row icon-demo-content" id="brand">
                                            </div>
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->

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

         <!-- fontawesome icons init -->
         <script src="assets/js/pages/fontawesome.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
