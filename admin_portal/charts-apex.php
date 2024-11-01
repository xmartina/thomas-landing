<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Apex Charts')); ?>

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Charts' , 'title' => 'Apex Charts')); ?>

                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Line with Data Labels</h4>
    
                                            <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>                              
                                        </div>
                                    </div><!--end card-->
                                </div>
    
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Dashed Line</h4>
                                            
                                            <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>        
                                        </div>
                                    </div><!--end card-->
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Spline Area</h4>
    
                                            <div id="spline_area" class="apex-charts" dir="ltr"></div>                      
                                        </div>
                                    </div><!--end card-->
                                </div>
    
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Column Charts</h4>
                                            
                                            <div id="column_chart" class="apex-charts" dir="ltr"></div>                                      
                                        </div>
                                    </div><!--end card-->
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Column with Data Labels</h4>
                                            
                                            <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Bar Chart</h4>
                                            
                                            <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                            </div>  
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Line, Column & Area Chart</h4>
                                            
                                            <div id="mixed_chart" class="apex-charts" dir="ltr"></div> 
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Radial Chart</h4>
                                            
                                            <div id="radial_chart" class="apex-charts" dir="ltr"></div>  
                                        </div>
                                    </div><!--end card-->
                                    
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Pie Chart</h4>
                                            
                                            <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Donut Chart</h4>
                                            
                                            <div id="donut_chart" class="apex-charts"  dir="ltr"></div>
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

        <!-- Plugin Js-->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- demo js-->
        <script src="assets/js/pages/apexcharts.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
