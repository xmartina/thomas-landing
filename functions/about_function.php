<?php
include_once(__DIR__ . '/main.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$dep_sql = "SELECT * FROM departments ORDER BY RAND() LIMIT 6";
$dep_sql = "SELECT * FROM departments ORDER BY RAND()";
$dep_result = $conn->query($dep_sql);

function list_all_department($dep_result, $site_url)
{
    if ($dep_result->num_rows > 0) {
        $i = 1; // Initialize counter for numbering
        while ($row = $dep_result->fetch_assoc()) {
            echo '<li>
                        <a href="'. $site_url .'pages/department/page/?book_id=' . $row['book_id'] . '" class="flex-two">
                            <span>' . htmlspecialchars($row['dep_name']) . '</span>
                            <i class="icon-arrow-rights"></i>
                        </a>
                    </li>';
        }
    }
}


//Get All School Gallery
$gallery_sql = "SELECT * FROM school_gallery ORDER BY RAND()";
$gallery_result = $conn->query($gallery_sql);

function get_gallery($gallery_result, $site_url) {
    if ($gallery_result->num_rows > 0) {
        while ($row = $gallery_result->fetch_assoc()) {
            $img_name = $row['img_name'];  // Assuming 'img_name' is a column in your 'school_gallery' table
            $img_title = $row['img_title'];  // Assuming 'img_title' is a column in your 'school_gallery' table

            echo '<div class="col-lg-4">
                    <div class="school_gallery" style="background-image: url(\''. $site_url .'assets/school_image/gallery/'. $img_name .'\');">
                    <span class="sr-only">'. $img_title .'</span>
                    </div>
                  </div>';
        }
    } else {
        echo 'No images found in the gallery.';
    }
}
