<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'FAQs')); ?>

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Pages' , 'title' => 'FAQS')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="faq-box bg-light p-4 mt-4 rounded">
                            
                                                    <div class="faq-icon">
                                                        <i class="mdi mdi-help text-primary"></i>
                                                    </div>
                                                    <h5 class="text-primary">01.</h5>
                                                    <h5 class="faq-title mt-3">What is Lorem Ipsum?</h5>
                                                    <p class="faq-ans text-muted mt-3 mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal they distribution of letters opposed to using content here.</p>
                                                </div>
                            
                                            </div>
                            
                                            <div class="col-lg-4">
                                                <div class="faq-box bg-light p-4 mt-4 rounded">
                            
                                                    <div class="faq-icon">
                                                        <i class="mdi mdi-help text-primary"></i>
                                                    </div>
                                                    <h5 class="text-primary">02.</h5>
                                                    <h5 class="faq-title mt-3">Why use Lorem Ipsum?</h5>
                                                    <p class="faq-ans text-muted mt-3 mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal they distribution of letters opposed to using content here.</p>
                            
                                                </div>
                                            </div>
                            
                                            <div class="col-lg-4">
                                                <div class="faq-box bg-light p-4 mt-4 rounded">
                                                    <div class="faq-icon">
                                                        <i class="mdi mdi-help text-primary"></i>
                                                    </div>
                            
                                                    <h5 class="text-primary">03.</h5>
                                                    <h5 class="faq-title mt-3">How many variations exist?</h5>
                                                    <p class="faq-ans text-muted mt-3 mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal they distribution of letters opposed to using content here.</p>
                            
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="faq-box bg-light p-4 mt-4 rounded">
                                                    <div class="faq-icon">
                                                        <i class="mdi mdi-help text-primary"></i>
                                                    </div>
                            
                                                    <h5 class="text-primary">04.</h5>
                                                    <h5 class="faq-title mt-3">Is safe use Lorem Ipsum?</h5>
                                                    <p class="faq-ans text-muted mt-3 mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal they distribution of letters opposed to using content here.</p>
                            
                                                </div>
                                            </div>
                            
                                            <div class="col-lg-4">
                                                <div class="faq-box bg-light p-4 mt-4 rounded">
                                                    <div class="faq-icon">
                                                        <i class="mdi mdi-help text-primary"></i>
                                                    </div>
                            
                                                    <h5 class="text-primary">05.</h5>
                                                    <h5 class="faq-title mt-3">When can be used?</h5>
                                                    <p class="faq-ans text-muted mt-3 mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal they distribution of letters opposed to using content here.</p>
                            
                                                </div>
                                            </div>
                            
                                            <div class="col-lg-4">
                                                <div class="faq-box bg-light p-4 mt-4 rounded">
                                                    <div class="faq-icon">
                                                        <i class="mdi mdi-help text-primary"></i>
                                                    </div>
                            
                                                    <h5 class="text-primary">06.</h5>
                                                    <h5 class="faq-title mt-3">What is Lorem Ipsum?</h5>
                                                    <p class="faq-ans text-muted mt-3 mb-0">The point of using Lorem Ipsum is that it has a more-or-less normal they distribution of letters opposed to using content here.</p>
                            
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
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

        <script src="assets/js/app.js"></script>

    </body>
</html>
