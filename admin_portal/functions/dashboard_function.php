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

if (isset($_POST['update_home_about_1'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];

    // SQL UPDATE query
    $sql = "UPDATE home_about_section SET
                title = '$title',
                content = '$content',
                button_text = '$button_text',
                button_link = '$button_link'
            WHERE id = 1";

    // Execute query and check if it succeeded
    if ($conn->query($sql) === TRUE) { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?success=home_about_updated";
        </script>
    <?php } else { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?error=error_updating_record";
        </script>
    <?php }

    // Close connection
    $conn->close();
}

if (isset($_POST['update_home_about_2'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];

    // SQL UPDATE query
    $sql = "UPDATE home_about_section SET
                title = '$title',
                content = '$content',
                button_text = '$button_text',
                button_link = '$button_link'
            WHERE id = 2";

    // Execute query and check if it succeeded
    if ($conn->query($sql) === TRUE) { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?success=home_about_updated";
        </script>
    <?php } else { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?error=error_updating_record";
        </script>
    <?php }

    // Close connection
    $conn->close();
}

if (isset($_POST['update_home_about_3'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];

    // SQL UPDATE query
    $sql = "UPDATE home_about_section SET
                title = '$title',
                content = '$content',
                button_text = '$button_text',
                button_link = '$button_link'
            WHERE id = 3";

    // Execute query and check if it succeeded
    if ($conn->query($sql) === TRUE) { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?success=home_about_updated";
        </script>
    <?php } else { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?error=error_updating_record";
        </script>
    <?php }

    // Close connection
    $conn->close();
}

if (isset($_POST['update_rector_welcome_note'])) {
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];
    $rec_position = $_POST['rec_position'];
    $rec_name = $_POST['rec_name'];

    // File upload handling
    $rec_img = $extra_img = "";

    // Check for new rector image
    if (!empty($_FILES['rec_img']['name'])) {
        $target_dir = "/assets/school_image/staff/";
        $rec_img = basename($_FILES["rec_img"]["name"]);
        $target_file = $target_dir . $rec_img;
        if (move_uploaded_file($_FILES["rec_img"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars($rec_img) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your rector image.";
        }
    }

    // Check for new extra image
    if (!empty($_FILES['extra_img']['name'])) {
        $target_dir = "/assets/school_image/staff/";
        $extra_img = basename($_FILES["extra_img"]["name"]);
        $target_file = $target_dir . $extra_img;
        if (move_uploaded_file($_FILES["extra_img"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars($extra_img) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your extra image.";
        }
    }

    // SQL UPDATE query
    $sql = "UPDATE rector_welcome_note SET
                sub_title = '$sub_title',
                title = '$title',
                content = '$content',
                button_text = '$button_text',
                button_link = '$button_link',
                rec_position = '$rec_position',
                rec_name = '$rec_name'
            ";

    // Add image fields only if new images were uploaded
    if (!empty($rec_img)) {
        $sql .= ", rec_img = '$rec_img'";
    }
    if (!empty($extra_img)) {
        $sql .= ", extra_img = '$extra_img'";
    }

    // Specify record ID
    $sql .= " WHERE id = 1";

    // Execute the query
    if ($conn->query($sql) === TRUE) { ?>
        <script type="text/javascript">
            window.location.href = "<?= $admin_url ?>pages/home/?success=rector_note_updated";
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
