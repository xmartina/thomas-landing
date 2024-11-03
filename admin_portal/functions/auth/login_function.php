<?php
ob_start();
session_start();
include_once(__DIR__ . '/../main_function.php');

$page_url = $_SERVER['REQUEST_URI'];

// Redirect if not authenticated for certain pages
if (strpos($page_url, 'auth') === false) {
    if (strpos($page_url, 'v_card') !== false || strpos($page_url, 'card_request') !== false) {
        if (!isset($_SESSION['username'])) { ?>
            <script type="text/javascript">
                window.location.href = "<?= $admin_url ?>?a=login";
            </script>
            <?php
            exit();
        }
    }
}

// Check if login form is submitted
if (isset($_POST['login'])) {
    $username = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        // Query to check if the username exists
        $query = "SELECT id, username, password FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        // Check if the user exists
        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            // Verify password
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                // Redirect to v_card page
                header("Location: " . $admin_url . "v_card");
                exit();
            } else { ?>
                <script type="text/javascript">
                    window.location.assign('<?= $admin_url ?>v_card/auth/?error=invalid_password');
                </script>
                <?php
                exit();
            }
        } else { ?>
            <script type="text/javascript">
                window.location.assign('<?= $admin_url ?>v_card/auth/?error=invalid_username');
            </script>
            <?php
            exit();
        }
    } else { ?>
        <script type="text/javascript">
            window.location.assign('<?= $admin_url ?>v_card/auth/?error=missing_credentials');
        </script>
        <?php
        exit();
    }
}

ob_end_flush();
?>
