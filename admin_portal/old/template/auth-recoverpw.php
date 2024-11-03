<?php
// Include config file
require_once "partials/config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

$useremail_err = $msg = "";

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/$uri_segments[1]";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $useremail = mysqli_real_escape_string($link, $_POST['useremail']);

    $sql = "SELECT * FROM users WHERE useremail = '$useremail'";
    $query = mysqli_query($link, $sql);
    $emailcount = mysqli_num_rows($query);

    if ($emailcount) {
        $userdata = mysqli_fetch_array($query);
        $username = $userdata['username'];
        $token = $userdata['token'];

        $subject = "Password Reset";
        $body = "Hi, $username. Click here to reset your password: <br><a href=\"$actual_link/Admin/auth-reset.php?token=$token\">$actual_link/auth-reset.php?token=$token</a>";
        $sender_email = "From: $gmailid";

        try {
            // Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = $gmailid;
            $mail->Password = $gmailpassword;

            // Sender and recipient settings
            $mail->setFrom($gmailid, $gmailusername);
            $mail->addAddress($useremail, $username);
            $mail->addReplyTo($gmailid, $gmailusername); // to set the reply to

            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;

            $mail->send();
            $msg = "We have emailed your password reset link!";
            // header("location:auth-login.php");
        } catch (Exception $e) {
            $useremail_err =  "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $useremail_err = "Email not found.";
    }
}
?>
<?php include 'partials/main.php'; ?>
<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Recover password')); ?>

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

                                        <h5 class="text-primary mb-2 mt-4">Reset Password</h5>
                                        <p class="text-muted">Re-Password with Morvin.</p>
                                    </div>

                                    <div class="alert alert-success text-center mb-4 mt-4 pt-2" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>


                                    <form class="form-horizontal" action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post">
            
                                        <div class="mb-3 <?php echo (!empty($useremail_err)) ? 'has-error' : ''; ?>">
                                            <label for="useremail">Email<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="useremail" name="useremail" placeholder="Enter email">
                                            <span class="text-danger"><?php echo $useremail_err; ?></span>
                                            
                                        </div>
                    
                                        <div class="row mb-0">
                                            <div class="col-12 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                            </div>
                                        </div>
    
                                    </form>

                                   



                                   

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Remember It ? <a href="auth-login.php" class="fw-bold text-white"> Sign In here</a> </p>
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