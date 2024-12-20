<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Lightbox')); ?>

        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'UI Elements' , 'title' => 'Lightbox')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Single Image lightbox</h4>
                                            <p class="card-title-desc">Three simple popups with different scaling settings.</p>
            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div>
                                                        <h5 class="font-size-14">Fits (Horz/Vert)</h5>
                                                        <a class="image-popup-vertical-fit" href="assets/images/small/img-2.jpg" title="Caption. Can be aligned it to any side and contain any HTML.">
                                                            <img class="img-fluid" alt="" src="assets/images/small/img-2.jpg"  width="145">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mt-4 mt-sm-0">
                                                        <h5 class="font-size-14">Effects</h5>
                                                        <a class="image-popup-no-margins" href="assets/images/small/img-3.jpg">
                                                            <img class="img-fluid" alt="" src="assets/images/small/img-3.jpg" width="75">
                                                        </a>
                                                        <p class="mt-2 mb-0 text-muted">No gaps, zoom animation, close icon in top-right corner.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Lightbox Gallery</h4>
                                            <p class="card-title-desc">In this example lazy-loading of images is enabled for the next image based on move direction. </p>
            
                                            <div class="popup-gallery">
                                                <a class="float-start" href="assets/images/small/img-1.jpg" title="Project 1">
                                                    <div class="img-fluid">
                                                        <img src="assets/images/small/img-1.jpg" alt="" width="120">
                                                    </div>
                                                </a>
                                                <a class="float-start" href="assets/images/small/img-2.jpg" title="Project 2">
                                                    <div class="img-fluid">
                                                        <img src="assets/images/small/img-2.jpg" alt="" width="120">
                                                    </div>
                                                </a>
                                                <a class="float-start" href="assets/images/small/img-3.jpg" title="Project 3">
                                                    <div class="img-fluid">
                                                        <img src="assets/images/small/img-3.jpg" alt="" width="120">
                                                    </div>
                                                </a>
                                                <a class="float-start" href="assets/images/small/img-4.jpg" title="Project 4">
                                                    <div class="img-fluid">
                                                        <img src="assets/images/small/img-4.jpg" alt="" width="120">
                                                    </div>
                                                </a>
                                                <a class="float-start" href="assets/images/small/img-5.jpg" title="Project 5">
                                                    <div class="img-fluid">
                                                        <img src="assets/images/small/img-5.jpg" alt="" width="120">
                                                    </div>
                                                </a>
                                                <a class="float-start" href="assets/images/small/img-6.jpg" title="Project 6">
                                                    <div class="img-fluid">
                                                        <img src="assets/images/small/img-6.jpg" alt="" width="120">
                                                    </div>
                                                </a>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Zoom Gallery</h4>
                                            <p class="card-title-desc">Zoom effect works only with images.</p>
            
                                            <div class="zoom-gallery">
                                                <a class="float-start" href="assets/images/small/img-3.jpg" title="Project 1"><img src="assets/images/small/img-3.jpg" alt="" width="275"></a>
                                                <a class="float-start" href="assets/images/small/img-7.jpg" title="Project 2"><img src="assets/images/small/img-7.jpg" alt="" width="275"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Popup with video or map</h4>
                                            <p class="card-title-desc">In this example lazy-loading of images is enabled for the next image based on move direction. </p>
            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="button-items">
                                                        <a class="popup-youtube btn btn-secondary" href="https://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube Video</a>
                                                        <a class="popup-vimeo btn btn-secondary" href="https://vimeo.com/45830194">Open Vimeo Video</a>
                                                        <a class="popup-gmaps btn btn-secondary" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
    
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Popup with form</h4>
                                            <div>
                                                <a class="popup-form btn btn-primary" href="#test-form">Popup form</a>
                                            </div>
    
                                            <div class="card mfp-hide mfp-popup-form mx-auto" id="test-form">
                                                <div class="card-body">
                                                    <h4 class="mt-0 mb-4">Form</h4>   
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="name">Name</label>
                                                                    <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="email">Email</label>
                                                                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="password">Password</label>
                                                                    <input type="text" class="form-control" id="password" placeholder="Enter Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="subject">Subject</label>
                                                                    <textarea class="form-control" id="subject" rows="3"></textarea>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="text-end">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
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

        <!-- Magnific Popup-->
        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Tour init js-->
        <script src="assets/js/pages/lightbox.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
