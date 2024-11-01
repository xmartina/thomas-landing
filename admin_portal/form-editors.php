<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Form Editors')); ?>

            <!-- Summernote css -->
            <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Forms' , 'title' => 'Form Editors')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
    
                                            <h4 class="header-title">Tinymce wysihtml5</h4>
                                            <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                                                plugin that makes it easy to create simple, beautiful wysiwyg editors
                                                with the help of wysihtml5 and Twitter Bootstrap.</p>
    
                                            <form method="post">
                                                <textarea id="elm1" name="area"></textarea>
                                            </form>
    
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

                <!--tinymce js-->
        <script src="assets/libs/tinymce/tinymce.min.js"></script>

        <!-- Summernote js -->
        <script src="assets/libs/summernote/summernote-bs4.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/form-editor.init.js"></script>


        <script src="assets/js/app.js"></script>

    </body>
</html>
