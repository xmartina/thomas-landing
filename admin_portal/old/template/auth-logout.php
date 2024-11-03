<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    session_destroy();
    // header("location: auth-logout.php");
    // exit;
}

?>
<?php include 'partials/main.php'; ?>
<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Login page')); ?>

    <?php include 'partials/head-css.php'; ?>

</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="home-btn"><a href="/" class="text-white router-link-active"><i
                            class="fas fa-home h2"></i></a></div>


                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="index.php">
                                            <img src="assets/images/logo-dark.png" height="22" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Log Out</h5>
                                        <p class="text-muted">Sign in to continue to Morvin.</p>
                                    </div>



                                  
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Don't have an account ?<a href="auth-register.php" class="fw-bold text-white"> Register</a> </p>
                            <p>Already have an account ?<a href="auth-login.php" class="fw-bold text-white"> Login</a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Morvin. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <?php include 'partials/vendor-scripts.php'; ?>

    <script src="assets/js/app.js"></script>

</body>

</html>