<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    <head>

        <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Form Validation')); ?>

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

                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Morvin', 'subtitle' =>'Forms' , 'title' => 'Form Validation')); ?>


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Bootstrap Validation - Normal</h4>
                                            <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.</p>
                                            
                                            <form class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom01" class="form-label">First name</label>
                                                            <input type="text" class="form-control" id="validationCustom01"
                                                                placeholder="First name" value="Mark" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom02" class="form-label">Last name</label>
                                                            <input type="text" class="form-control" id="validationCustom02"
                                                                placeholder="Last name" value="Otto" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="validationCustom03" class="form-label">State</label>
                                                            <select class="form-select" id="validationCustom03" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid state.
                                                            </div>
            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="validationCustom04" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="validationCustom04"
                                                                placeholder="City" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="validationCustom05" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" id="validationCustom05"
                                                                placeholder="Zip" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                        required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Agree to terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Bootstrap Validation (Tooltips)</h4>
                                            <p class="card-title-desc">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
                                            
                                            <form class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="validationTooltip01" class="form-label">First name</label>
                                                            <input type="text" class="form-control" id="validationTooltip01"
                                                                placeholder="First name" value="Mark" required>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="validationTooltip02" class="form-label">Last name</label>
                                                            <input type="text" class="form-control" id="validationTooltip02"
                                                                placeholder="Last name" value="Otto" required>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="validationTooltipUsername" class="form-label">Username</label>
                                                            <div class="input-group">
                                                                    <span class="input-group-text"
                                                                        id="validationTooltipUsernamePrepend">@</span>
                                                            
                                                                <input type="text" class="form-control" id="validationTooltipUsername"
                                                                    placeholder="Username"
                                                                    aria-describedby="validationTooltipUsernamePrepend" required>
                                                                <div class="invalid-tooltip">
                                                                    Please choose a unique and valid username.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative">
                                                            <label for="validationTooltip04" class="form-label">State</label>
                                                            <input type="text" class="form-control" id="validationTooltip04"
                                                                placeholder="State" required>
                                                            <div class="invalid-tooltip">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="col-md-6">
                                                        <div class="mb-3 position-relative">
                                                            <label for="validationTooltip03" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="validationTooltip03"
                                                                placeholder="City" required>
                                                            <div class="invalid-tooltip">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
            
                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Validation type</h4>
                                            <p class="card-title-desc">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p>
            
                                            <form class="custom-validation" action="#">
                                                <div class="mb-3">
                                                    <label>Required</label>
                                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                                </div>
            
                                                <div class="mb-3">
                                                    <label>Equal To</label>
                                                    <div>
                                                        <input type="password" id="pass2" class="form-control" required
                                                                placeholder="Password"/>
                                                    </div>
                                                    <div class="mt-2">
                                                        <input type="password" class="form-control" required
                                                                data-parsley-equalto="#pass2"
                                                                placeholder="Re-Type Password"/>
                                                    </div>
                                                </div>
            
                                                <div class="mb-3">
                                                    <label>E-Mail</label>
                                                    <div>
                                                        <input type="email" class="form-control" required
                                                                parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>URL</label>
                                                    <div>
                                                        <input parsley-type="url" type="url" class="form-control"
                                                                required placeholder="URL"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Digits</label>
                                                    <div>
                                                        <input data-parsley-type="digits" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter only digits"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Number</label>
                                                    <div>
                                                        <input data-parsley-type="number" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter only numbers"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Alphanumeric</label>
                                                    <div>
                                                        <input data-parsley-type="alphanum" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter alphanumeric value"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Textarea</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5" placeholder="Type here"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end form -->
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">Range validation</h4>
                                            <p class="card-title-desc">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p>
            
                                            <form action="#" class="custom-validation">
            
                                                <div class="mb-3">
                                                    <label>Min Length</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Max Length</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Range Length</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-length="[5,10]"
                                                                placeholder="Text between 5 - 10 chars length"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Min Value</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-min="6" placeholder="Min value is 6"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Max Value</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-max="6" placeholder="Max value is 6"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Range Value</label>
                                                    <div>
                                                        <input class="form-control" required type="text range" min="6"
                                                                max="100" placeholder="Number between 6 - 100"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Regular Exp</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                                placeholder="Hex. Color"/>
                                                    </div>
                                                </div>
            
                                                <div class="mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- end form -->
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

        <script src="assets/libs/parsleyjs/parsley.min.js"></script>

        <script src="assets/js/pages/form-validation.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
