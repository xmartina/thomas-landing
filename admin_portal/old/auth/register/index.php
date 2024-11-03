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
                    $useremail_err = "This email is already taken.";
                }else{
                    $useremail = trim($_POST["useremail"]);
                }
            }else{
                $useremail_err = "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["username"]))){
        $username_err ="Please enter username.";
    }elseif(strlen(trim($_POST["username"])) >15 ){
        $username_err ="Enter valid username.";
    }else{
        $username =trim($_POST["username"]);
    }


    if(empty(trim($_POST["password"]))){
        $password_err ="please enter password";
    }elseif(strlen(trim($_POST["password"])) <8 ){
        $password_err = "Password must have atleast 8 characters.";
    }else{
        $password =trim($_POST["password"]);
    }


    if(empty($useremail_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        $sql ="insert into users (useremail, username, password,token) values (? ,? ,? ,?)";

        if($stmt =mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss" ,$param_useremail, $param_username, $param_password, $param_token);

            $param_useremail = $useremail;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_token = bin2hex(random_bytes(50));

            if(mysqli_stmt_execute($stmt)){
                header("location: auth-login.php");
            }else{
                echo "something went wrong.please try later.";
            }
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

                                    <h5 class="text-primary mb-2 mt-4">Free Register</h5>
                                    <p class="text-muted">Get your free Morvin account now.</p>
                                </div>


                                <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                    <div class="mb-3 <?= !empty($useremail_err) ? 'has-error' : '' ?>">
                                        <label for="useremail">Email<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" id="useremail" name="useremail" placeholder="Enter email">
                                        <span class="text-danger"><?php echo $useremail_err;  ?></span>
                                    </div>

                                    <div class="mb-3 <?= !empty($username_err) ? 'has-error' : '' ?>">
                                        <label for="username">Username<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        <span class="text-danger"><?php echo $username_err;  ?></span>
                                    </div>

                                    <div class="mb-3 <?= !empty($password_err) ? 'has-error' : '' ?>">
                                        <label for="userpassword">Password<span class="text-danger"> *</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                        <span class="text-danger"><?php echo $password_err;  ?></span>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Morvin <a href="#" class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center text-white">
                        <p>Already have an account ? <a href="auth-login.php" class="fw-bold text-white"> Login </a> </p>
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