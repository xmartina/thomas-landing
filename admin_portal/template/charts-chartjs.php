<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Chartjs Charts')); ?>

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Charts' , 'title' => 'Chartjs Charts')); ?>

                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Bar Chart</h4>
                                            <p class="card-title-desc">Example of bar chart chart js.</p>
        
                                            <canvas id="barChart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Line Chart</h4>
                                            <p class="card-title-desc">Example of line chart chart js.</p>
        
                                            <canvas id="lineChart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->
        
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Pie chart</h4>
                                            <p class="card-title-desc">Example of line pie chart js.</p>
        
                                            <canvas id="pieChart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Area chart</h4>
                                            <p class="card-title-desc">Example of line area chart js.</p>
        
                                            <canvas id="areaChart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->
    
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Donut chart</h4>
                                            <p class="card-title-desc">Example of donut chart js.</p>
        
                                            <canvas id="donut-chart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                            
                                            <h4 class="header-title">Radar chart</h4>
                                            <p class="card-title-desc">Example of radar chart js.</p>
        
                                            <canvas id="radar-chart"></canvas>
                            
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->

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

        <!-- Chart JS -->
        <script src="assets/libs/chart.js/Chart.bundle.min.js"></script>
        <script src="assets/js/pages/chartjs.init.js"></script> 

        <script src="assets/js/app.js"></script>

    </body>
</html>
