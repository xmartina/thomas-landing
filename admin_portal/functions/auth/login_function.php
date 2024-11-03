<?php
// Start the session
session_start();

// Include database configuration file
require_once __DIR__.'/../../functions/main_function.php';

$username = $password = "";
$username_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Proceed if no validation errors
    if (empty($username_err) && empty($password_err)) {
        // Query to select user data
        $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        // Check if the query returned a result
        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, start a new session
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION["username"] = $row["username"];

                // Redirect user to welcome page
                header("location: welcome.php");
                exit();
            } else {
                // Incorrect password
                $password_err = "The password you entered was not valid.";
            }
        } else {
            // Username doesn't exist
            $username_err = "No account found with that username.";
        }
    }

    // Close connection
    mysqli_close($conn);
}
?>
