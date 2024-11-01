<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Google Maps')); ?>

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Maps' , 'title' => 'Google Maps')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Markers</h4>
                                            <p class="card-title-dsec">Example of google maps.</p>
            
                                            <div id="gmaps-markers" class="gmaps"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Overlays</h4>
                                            <p class="card-title-desc">Example of google maps.</p>
            
                                            <div id="gmaps-overlay" class="gmaps"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Street View Panoramas</h4>
                                            <p class="card-title-desc">Example of google maps.</p>
            
                                            <div id="panorama" class="gmaps-panaroma"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Map Types</h4>
                                            <p class="card-title-desc">Example of google maps.</p>
            
                                            <div id="gmaps-types" class="gmaps"></div>
                                        </div>
                                    </div>
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

        <!-- google maps api -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

        <!-- Gmaps file -->
        <script src="assets/libs/gmaps/gmaps.min.js"></script>
        
        <!-- demo codes -->
        <script src="assets/js/pages/gmaps.init.js"></script>   

        <script src="assets/js/app.js"></script>

    </body>
</html>
