<?php
include_once(__DIR__ . '/main.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$dep_sql = "SELECT * FROM departments ORDER BY RAND() LIMIT 6";
$dep_sql = "SELECT * FROM departments ORDER BY RAND()";
$dep_result = $conn->query($dep_sql);

function list_all_department($dep_result)
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