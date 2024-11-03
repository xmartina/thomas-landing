<?php
// Initialize the session
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: /admin_portal");
    exit;
}

// Include config file
include_once (__DIR__.'/../../functions/login_function.php');
require_once (__DIR__."/../../partials/config.php");


// Define variables and initialize with empty values
$useremail = $password = "";
$useremail_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["useremail"]))) {
        $useremail_err = "Please enter user email.";
    } elseif (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)) {
        $useremail_err = "Invalid email format";
    } else {
        $useremail = trim($_POST["useremail"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($useremail_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, useremail, password FROM users WHERE useremail = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);

            // Set parameters
            $param_useremail = $useremail;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if useremail exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $useremail, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["useremail"] = $useremail;
                            $_SESSION["username"] = $username;
                            // Redirect user to welcome page
                            header("location: /admin_portal");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $useremail_err = "No account found with that user email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
}

?>
<?php include (__DIR__.'/../../../admin_portal/partials/main.php'); ?>
<head>

    <?php includeFileWithVariables(__DIR__.'/../../../admin_portal/partials/title-meta.php', array('title' => 'Login page')); ?>

    <?php include __DIR__.'/../../../admin_portal/partials/head-css.php'; ?>

</head>


<body class="authentication-bg bg-primary">
<div class="home-center">
    <div class="home-desc-center">

        <div class="container">

            <div class="home-btn"><a href="/" class="text-white router-link-active"><i
                        class="fas fa-home h2 text-white"></i></a></div>


            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-2 py-3">


                                <div class="text-center">
                                    <a href="<?=$site_url?>">
                                        <img src="<?=$site_url?>assets/images/logo_footer.png" height="22" alt="logo">
                                    </a>

                                    <h5 class="text-primary mb-2 mt-4">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to <?=$site_name?></p>
                                </div>


                                <form class="form-horizontal mt-4 pt-2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                    <div class="mb-3 <?= !empty($useremail_err) ? 'has-error' : '' ?>">
                                        <label for="username">Username<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" id="useremail" name="useremail" placeholder="Enter useremail">
                                        <span class="text-danger"><?php echo $useremail_err; ?></span>
                                    </div>

                                    <div class="mb-3 <?= !empty($password_err) ? 'has-error' : '' ?>">
                                        <label for="userpassword">Password<span class="text-danger"> *</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                        <span class="text-danger"><?php echo $password_err; ?></span>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                                   id="customControlInline">
                                            <label class="form-label"
                                                   for="customControlInline">Remember me</label>
                                        </div>
                                    </div>

                                    <div>
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="<?= $admin_url ?>auth/forgotten_password" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>


                                </form>


                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center text-white">
                        <p>Don't have an account ?<a href="<?= $admin_url ?>auth/register" class="fw-bold text-white"> Register</a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> All Rights Reserved | <?= $site_name ?></p>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- End Log In page -->
</div>

<?php include __DIR__.'/../../../admin_portal/partials/vendor-scripts.php'; ?>

<script src="<?= $site_url ?>assets/js/app.js"></script>

</body>

</html>