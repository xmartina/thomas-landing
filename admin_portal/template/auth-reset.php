<?php 

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    session_destroy();
    // header("location: auth-logout.php");
    // exit;
}

require_once "partials/config.php";

$useremail = $username = $password = $confirm_password = "";
$useremail_err = $username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty(trim($_POST["useremail"]))){
        $useremail_err ="please enter useremail. ";
    }elseif (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)){
        $useremail_err ="Invalid email format.";
    }else{
        $sql = "SELECT id FROM users WHERE useremail = ?";
            if($stmt = mysqli_prepare($link ,$sql)){
                mysqli_stmt_bind_param($stmt ,"s", $param_useremail);

                $param_useremail=trim($_POST["useremail"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $useremail = trim($_POST["useremail"]);
                    }else{
                        $useremail_err = "Useremail something went wrong.";
                    }
                }else{
                    $useremail_err = "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter new password.";
    } elseif (strlen(trim($_POST["password"])) < 8) {
        $password_err = "Password must have atleast 8 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    //Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please enter a confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }


    if(empty($useremail_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        $sql ="UPDATE users SET password = ? WHERE useremail = '$useremail'";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s",  $param_password, );

            // Set parameters
            $param_useremail = $useremail;
            //$param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            //$param_token = bin2hex(random_bytes(50));
            

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                
                // Redirect to index page
                header("location: auth-login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}

?>
<?php include 'partials/main.php'; ?>

<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Register page')); ?>

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

                                        <h4 class="text-primary mb-2 mt-4">Reset Password</h4>
                                        
                                    </div>


                                    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
                                        <div class="mb-3 <?= !empty($useremail_err) ? 'has-error' : '' ?>">
                                            <label for="useremail">Email<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="useremail" name="useremail" placeholder="Enter email">  
                                            <span class="text-danger"><?php echo $useremail_err;  ?></span>      
                                        </div>
                
                                        <div class="mb-3 <?= !empty($password_err) ? 'has-error' : '' ?>">
                                            <label for="userpassword">Password<span class="text-danger"> *</span></label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                            <span class="text-danger"><?php echo $password_err;  ?></span>          
                                        </div>

                                        <div class="mb-3 <?= !empty($confirm_password_err) ? 'has-error' : '' ?>">
                                            <label for="userpassword">Confirm Password<span class="text-danger"> *</span></label>
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter confirm password">
                                            <span class="text-danger"><?php echo $confirm_password_err;  ?></span>          
                                        </div>
                    
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset Password</button>
                                        </div>
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By reset password you agree to the Morvin <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            
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