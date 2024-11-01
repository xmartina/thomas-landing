<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Video')); ?>

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'UI Elements' , 'title' => 'Video')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Ratio Video 16:9</h4>
                                            <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
            
                                            <!-- 16:9 aspect ratio -->
                                            <div class="ratio ratio-16x9">
                                                <iframe title="YouToube Video" src="https://www.youtube.com/embed/1y_kfWUCFDQ" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Ratio Video 21:9</h4>
                                            <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
            
                                            <!-- 21:9 aspect ratio -->
                                            <div class="ratio ratio-21x9">
                                                <iframe title="YouToube Video" src="https://www.youtube.com/embed/1y_kfWUCFDQ" allowfullscreen></iframe>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                            </div> 
                            <!-- end row -->
            
                            <div class="row">
            
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Ratio Video 4:3</h4>
                                            <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
            
                                            <!-- 4:3 aspect ratio -->
                                            <div class="ratio ratio-4x3">
                                                <iframe title="YouToube Video" src="https://www.youtube.com/embed/1y_kfWUCFDQ" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Ratio Video 1:1</h4>
                                            <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
            
                                            <!-- 1:1 aspect ratio -->
                                            <div class="ratio ratio-1x1">
                                                <iframe title="YouToube Video" src="https://www.youtube.com/embed/1y_kfWUCFDQ" allowfullscreen></iframe>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
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
