<?php
include_once(__DIR__ . '/../../admin_portal/functions/main_function.php');


$get_new_users_sql = "SELECT * FROM students WHERE is_registered = '0' LIMIT 10";
$get_new_users_result = $portal_conn->query($get_new_users_sql);

if (isset($_POST['update_slider_1'])) {
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $bottom_title = $_POST['bottom_title'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];
    $inner_big_text = $_POST['inner_big_text'];

    // Check if a new slider image was uploaded
    $slider_img = "";
    if (!empty($_FILES['slider_img']['name'])) {
        $target_dir = "/assets/images/slide/";
        $slider_img = basename($_FILES["slider_img"]["name"]);
        $target_file = $target_dir . $slider_img;

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["slider_img"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars($slider_img) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // SQL UPDATE query
    $sql = "UPDATE front_slider SET
                sub_title = '$sub_title',
                title = '$title',
                bottom_title = '$bottom_title',
                button_text = '$button_text',
                button_link = '$button_link',
                inner_big_text = '$inner_big_text'
            ";

    // Add image update only if a new image was uploaded
    if (!empty($slider_img)) {
        $sql .= ", slider_img = '$slider_img'";
    }

    // Specify which record to update
    $sql .= " WHERE id = 1";

    // Execute query and check if it succeeded
    if ($conn->query($sql) === TRUE) { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?success=slider_updated";
        </script>
   <?php } else { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?error=error_updating_record";
        </script>
    <?php }

    // Close connection
    $conn->close();
}

if (isset($_POST['update_slider_2'])) {
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $bottom_title = $_POST['bottom_title'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];
    $inner_big_text = $_POST['inner_big_text'];

    // Check if a new slider image was uploaded
    $slider_img = "";
    if (!empty($_FILES['slider_img']['name'])) {
        $target_dir = "/assets/images/slide/";
        $slider_img = basename($_FILES["slider_img"]["name"]);
        $target_file = $target_dir . $slider_img;

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["slider_img"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars($slider_img) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // SQL UPDATE query
    $sql = "UPDATE front_slider SET
                sub_title = '$sub_title',
                title = '$title',
                bottom_title = '$bottom_title',
                button_text = '$button_text',
                button_link = '$button_link',
                inner_big_text = '$inner_big_text'";

    // Add image update only if a new image was uploaded
    if (!empty($slider_img)) {
        $sql .= ", slider_img = '$slider_img'";
    }

    // Specify which record to update
    $sql .= " WHERE id = 2";

    // Execute query and check if it succeeded
    if ($conn->query($sql) === TRUE) { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?success=slider_updated";
        </script>
    <?php } else { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?error=error_updating_record";
        </script>
    <?php }

    // Close connection
    $conn->close();
}

if (isset($_POST['update_slider_3'])) {
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $bottom_title = $_POST['bottom_title'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];
    $inner_big_text = $_POST['inner_big_text'];

    // Check if a new slider image was uploaded
    $slider_img = "";
    if (!empty($_FILES['slider_img']['name'])) {
        $target_dir = "/assets/images/slide/";
        $slider_img = basename($_FILES["slider_img"]["name"]);
        $target_file = $target_dir . $slider_img;

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["slider_img"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars($slider_img) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // SQL UPDATE query
    $sql = "UPDATE front_slider SET
                sub_title = '$sub_title',
                title = '$title',
                bottom_title = '$bottom_title',
                button_text = '$button_text',
                button_link = '$button_link',
                inner_big_text = '$inner_big_text'";

    // Add image update only if a new image was uploaded
    if (!empty($slider_img)) {
        $sql .= ", slider_img = '$slider_img'";
    }

    // Specify which record to update
    $sql .= " WHERE id = 3";

    // Execute query and check if it succeeded
    if ($conn->query($sql) === TRUE) { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?success=slider_updated";
        </script>
    <?php } else { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?error=error_updating_record";
        </script>
    <?php }

    // Close connection
    $conn->close();
}

?>
