<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Form Upload')); ?>

        <!-- Plugins css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Forms' , 'title' => 'Form Upload')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Dropzone</h4>
                                            <p class="card-title-desc">DropzoneJS is an open source library
                                                that provides drag’n’drop file uploads with image previews.
                                            </p>
            
                                            <div>
                                                <form action="#" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                                        </div>
                                                        
                                                        <h4>Drop files here to upload</h4>
                                                    </div>
                                                </form>
                                            </div>
            
                                            <div class="text-center mt-4">
                                                <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                            </div>
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

         <!-- Plugins js -->
         <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
